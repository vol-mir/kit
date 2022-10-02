<?php

namespace App\Command;

use App\Entity\ {
    ProductionPlan,
    ProductionPlanItem,
    User,
    Rendition,
    Product
};
use Symfony\Component\Console\ {
    Command\Command,
    Input\InputInterface,
    Output\OutputInterface,
    Style\SymfonyStyle
};
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use App\Services\HTTPERPService;

class FetchListPlanCommand extends Command
{
    /** 
     * @var EntityManagerInterface $entityManager 
     */
    protected $entityManager;

    /** 
     * @var HTTPERPService $httpERPService 
     */
    private $httpERPService;

    protected static $defaultName = 'app:fetch:list-plan';

    public function __construct(
        EntityManagerInterface $entityManager,
        HTTPERPService $httpERPService
    ) {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->httpERPService = $httpERPService;
    }

    protected function configure()
    {
        $this->setDescription('Загрузка планов из ЕРП - php -d memory_limit=-1 bin/console app:fetch:list-plan');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        // Get plans fron ERP
        $erpPlans = $this->httpERPService->fetchListPlan();

        // Get user with id = 1 (admin)
        $admin = $this->entityManager->getRepository(User::class)->find(1);

        // Get all products
        $products = $this->entityManager->getRepository(Product::class)->findAll();

        // Get all renditions
        $renditions = $this->entityManager->getRepository(Rendition::class)->findAll();

        // Get standart rendition
        $renditionStandart = $this->entityManager->getRepository(Rendition::class)->find(1);

        $io->progressStart(count($erpPlans));

        foreach ($erpPlans as $erpPlan) {

            if ($erpPlan['ВидПлана'] !== 'Основной') {
                $io->progressAdvance();
                continue;
            }

            $productionPlan = $this->entityManager->getRepository(ProductionPlan::class)->findOneBy(['id_erp' => $erpPlan['Номер']]);
            if (!empty($productionPlan)) {
                $io->progressAdvance();
                continue;
            }

            $productionPlan = new ProductionPlan();
            $productionPlan->setIdErp($erpPlan['Номер']);
            $productionPlan->setDateErp(new DateTime($erpPlan['Дата']));
            $productionPlan->setDateBeginErp(new DateTime($erpPlan['НачалоПериода']));
            $productionPlan->setDateEndErp(new DateTime($erpPlan['ОкончаниеПериода']));
            $productionPlan->setAccountType(array_search($erpPlan['БААЗ_ТипСчетаПланаПроизводства'], ProductionPlan::ACCOUNT_TYPES));
            $productionPlan->setUser($admin);

            $planErpProducts = $this->httpERPService->fetchPlan((string)$erpPlan['Номер']);

            $indexNumber = 1;
            $note = '';

            foreach ($planErpProducts as $planErpProduct) {

                $product = null;
                foreach ($products as $elem) {
                    if (strtolower(trim($planErpProduct['ОбозначениеКД'])) === strtolower(trim($elem->getDesignation()))) {
                        $product = $elem;
                        break;
                    }
                }
                if (empty($product)) {
                    $note .= $planErpProduct['НаименованиеКД'] . ' ' . $planErpProduct['ОбозначениеКД'] . ' - ' . $planErpProduct['Характеристика'] . ' = ' . $planErpProduct['Количество'];
                    $io->note($planErpProduct['НаименованиеКД'] . ' ' . $planErpProduct['ОбозначениеКД'] . ' - ' . $planErpProduct['Характеристика'] . ' = ' . $planErpProduct['Количество']);
                    $io->newLine();
                    $io->progressAdvance();
                    continue;
                }

                $rendition = $renditionStandart;
                foreach ($renditions as $elem) {
                    if (strtolower(trim($planErpProduct['Характеристика'])) == strtolower(trim($elem->getName()))) {
                        $rendition = $elem;
                        break;
                    }
                }

                $productionPlanItem = new ProductionPlanItem();
                $productionPlanItem->setIndexNumber($indexNumber++);
                $productionPlanItem->setProductionPlan($productionPlan);
                $productionPlanItem->setProduct($product);
                $productionPlanItem->setRendition($rendition);
                $productionPlanItem->setAmount((float)str_replace(' ', '', $planErpProduct['Количество']));
                $this->entityManager->persist($productionPlanItem);
            }

            if (!empty($note)) {
                $productionPlan->setNote('Не внесены: ' . $note . ' - требуется ручная корректировка');
            }

            $this->entityManager->persist($productionPlan);
            $this->entityManager->flush();

            $io->progressAdvance();
        }

        $io->progressFinish();
        $io->success('Загрузка планов закончилась!');

        return Command::SUCCESS;
    }
}

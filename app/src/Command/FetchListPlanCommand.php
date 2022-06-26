<?php

namespace App\Command;

use App\Entity\ProductionPlan;
use App\Entity\ProductionPlanItem;
use App\Repository\ProductionPlanRepository;
use App\Repository\UserRepository;
use App\Repository\RenditionRepository;
use App\Repository\ProductRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Psr\Log\LoggerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Services\HTTPERPService;

class FetchListPlanCommand extends Command
{
    private $em;
    private $log;
    private $productionPlanRepository;
    private $userRepository;
    private $renditionRepository;
    private $productRepository;

    protected static $defaultName = 'app:fetch:list-plan';

    public function __construct(
        EntityManagerInterface $em,
        LoggerInterface $logger,
        ProductionPlanRepository $productionPlanRepository,
        UserRepository $userRepository,
        RenditionRepository $renditionRepository,
        ProductRepository $productRepository,
        HTTPERPService $httpERPService
    )
    {
        parent::__construct();

        $this->em = $em;
        $this->log = $logger;
        $this->productionPlanRepository = $productionPlanRepository;
        $this->httpERPService = $httpERPService;
        $this->userRepository = $userRepository;
        $this->renditionRepository = $renditionRepository;
        $this->productRepository = $productRepository;
    }

    protected function configure()
    {
        $this->setDescription('Fetch list plan - php -d memory_limit=-1 bin/console app:fetch:list-plan');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $productionPlans = $this->productionPlanRepository->findAll();
        $products = $this->productRepository->findAll();
        $renditions = $this->renditionRepository->findAll();

        $listPlan = $this->httpERPService->fetchListPlan();

        $user = $this->userRepository->find(1);
        $accountTypes = ProductionPlan::ACCOUNT_TYPES;

        $io->progressStart(count($listPlan));

        foreach ($listPlan as $plan) {

            $flag = 1;

            foreach ($productionPlans as $productionPlan) {
                if ($plan['Номер'] == $productionPlan->getIdErp()) {
                    $flag = 0;
                    break;
                }
            }

            if ($flag && $plan['ВидПлана'] === 'Основной') {

                $io->progressAdvance();

                $productionPlan = new ProductionPlan();
                $productionPlan->setIdErp($plan['Номер']);

                $productionPlan->setDateErp(new \DateTime($plan['Дата']));
                $productionPlan->setDateBeginErp(new \DateTime($plan['НачалоПериода']));
                $productionPlan->setDateEndErp(new \DateTime($plan['ОкончаниеПериода']));
                $productionPlan->setAccountType(array_search($plan['БААЗ_ТипСчетаПланаПроизводства'], $accountTypes));
                $productionPlan->setUser($user);

                

                sleep(2);

                $planProducts = $this->httpERPService->fetchPlan((string)$plan['Номер']);

                $indexNumber = 1;
                
                $note = '';
                foreach ($planProducts as $planProduct) {

                    $product = null;
                    foreach ($products as $itemProduct) {
                        if (strtolower(trim($planProduct['ОбозначениеКД'])) == strtolower(trim($itemProduct->getDesignation()))) {
                            $product = $itemProduct;
                            break;
                        }
                    }

                    $rendition = $this->renditionRepository->find(1);
                    foreach ($renditions as $itemRendition) {
                        if (strtolower(trim($planProduct['Характеристика'])) == strtolower(trim($itemRendition->getName()))) {
                            $rendition = $itemRendition;
                            break;
                        }
                    }
                   
                    if ($product) {
                        $productionPlanItem = new ProductionPlanItem();
                        $productionPlanItem->setIndexNumber($indexNumber++);
                        $productionPlanItem->setProductionPlan($productionPlan);
                        $productionPlanItem->setProduct($product);
                        $productionPlanItem->setRendition($rendition);
                        $productionPlanItem->setAmount((float)str_replace(' ', '', $planProduct['Количество']));

                        $this->em->persist($productionPlanItem);

                    } else {
                       $this->log->info($planProduct['НаименованиеКД'] . ' ' . $planProduct['ОбозначениеКД'] . ' ' .$planProduct['Характеристика'] . ' = ' .$planProduct['Количество']);

                       $io->note($planProduct['НаименованиеКД'] . ' [' . $planProduct['ОбозначениеКД'] . '] ' .$planProduct['Характеристика'] . ' = ' .$planProduct['Количество']);
                       $io->newLine();

                       $note .= $planProduct['НаименованиеКД'] . ' [' . $planProduct['ОбозначениеКД'] . '] ' .$planProduct['Характеристика'] . ' = ' .$planProduct['Количество'] . '; ';
                    }

                }
                
                if ($note) {
                    $productionPlan->setNote('Не внесены: ' . $note . ' - требуется ручная корректировка');
                }

                $this->em->persist($productionPlan);




            }

            $this->em->flush();

        }

        

        $io->progressFinish();
        $io->success('Fetch list plan success');
        $this->log->info('app:fetch:list-plan - Fetch list plan success');

        return Command::SUCCESS;
    }
}

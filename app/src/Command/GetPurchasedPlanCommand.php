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
use Psr\Log\LoggerInterface;
use App\Services\ {
    HTTPERPService,
    ListMaterialsService
};

class GetPurchasedPlanCommand extends Command
{
    /** 
     * @var EntityManagerInterface $entityManager 
     */
    protected $entityManager;

    /** 
     * @var ListMaterialsService $listMaterialsService 
     */
    private $listMaterialsService;

    protected static $defaultName = 'app:get:purchased-plan';

    public function __construct(
        EntityManagerInterface $entityManager,
        ListMaterialsService $listMaterialsService
    ) {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->listMaterialsService = $listMaterialsService;
    }

    protected function configure()
    {
        $this->setDescription('Расчет покупных деталей и материалов по плану из ЕРП - php -d memory_limit=-1 bin/console app:get:purchased-plan');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        // Get all production plans
        $productionPlans = $this->entityManager->getRepository(ProductionPlan::class)->findAll();

        $io->progressStart(count($productionPlans));

        foreach ($productionPlans as $productionPlan) {
            if (count($productionPlan->getNeedPurchasedProducts()) !== 0) {
                $io->progressAdvance();
                continue;
            }
            
            $this->listMaterialsService->initTable();

            foreach ($productionPlan->getProductionPlanItems() as $productionPlanItem) {
                $product = $productionPlanItem->getProduct();
                $rendition = $productionPlanItem->getRendition();
                $this->listMaterialsService->getMaterials($product->getId(), $rendition->getId(), $productionPlanItem->getAmount(), new DateTime(), 'root');
            }

            $tempMaterials = $this->listMaterialsService->getTableMaterials();
            $materials = $this->listMaterialsService->getAmountResult($tempMaterials);
            $this->listMaterialsService->saveTableMaterials($productionPlan, $materials);

            $io->progressAdvance();
            $io->note('Потребность рассчитана для плана - ' . $productionPlan->getId());
            $io->newLine();
        }

        $io->progressFinish();
        $io->success('Расчет планов закончилась!');

        return Command::SUCCESS;
    }
}

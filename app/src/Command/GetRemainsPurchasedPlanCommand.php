<?php

namespace App\Command;

use App\Entity\ProductionPlan;
use Symfony\Component\Console\{
    Command\Command,
    Input\InputInterface,
    Output\OutputInterface,
    Style\SymfonyStyle
};
use DateTime;
use Symfony\Component\Console\Input\InputOption;
use Doctrine\ORM\EntityManagerInterface;
use App\Services\ListMaterialsService;
use App\Services\HTTPERPService;

class GetRemainsPurchasedPlanCommand extends Command
{
    const STORE_BUY = [
        'Склад 10 ОГЭ',
        'Склад 11 - АВТОТЕХНИКА',
        'Склад № 10 Б ОИТ',
        'Склад № 10А (инвентарь, металл.тара и отв.хранение',
        'Склад №1 Металлов',
        'Склад №1 Химикатов',
        'Склад №10 - Оборудование',
        'Склад №11 Автозапчасти для автопарка БААЗ',
        'Склад №11А Инвентарь, б/у ТМЦ',
        'Склад №11А Ответственное хранение',
        'Склад №1А Инвентарь, метал тара и ответ. хранение',
        'Склад №2 Литья и поковок',
        'Склад №2А Инвентарь, метал. тара и ответ. хранение',
        'Склад №3 Комплектации',
        'Склад №3А Инвентарь, метал.тара и ответ. хранение',
        'Склад №3Б Прочее',
        'Склад №5 Нефтепродуктов',
        'Склад №5А Инвентарь, метал.тара и ответ. хранение',
        'Склад №5Б Материалы разные',
        'Склад №5В ТМЦ в РСМУ',
        'Склад №5Г Спецодежда',
        'Склад №6 (запчасти)',
        'Склад №6А Инвентарь, метал.тара и ответ. хранение',
        'Склад №7 Инструмент, твердый сплав',

    ];
    const STORE_MANUFACTURE = [
        'ИУ Кладовая', 'ИУ Склад МАТЕРИАЛА',
        'Кладовая Покраска МСЦ2', 'Кладовая Покраска МСЦ3', 'Кладовая ТГУ', 'Кладовая Травление',
        'МСЦ-1 Кладовая ВМО',
        'МСЦ-1 Кладовая Гайка корончатая',
        'МСЦ-1 Кладовая ГУР',
        'МСЦ-1 Кладовая Домкрат 10т',
        'МСЦ-1 Кладовая Домкрат 12т',
        'МСЦ-1 Кладовая Домкрат 15т',
        'МСЦ-1 Кладовая Домкрат 2,5т',
        'МСЦ-1 Кладовая Домкрат 25т',
        'МСЦ-1 Кладовая Домкрат 4т',
        'МСЦ-1 Кладовая Домкрат 5-200т',
        'МСЦ-1 Кладовая Домкрат 5т',
        'МСЦ-1 Кладовая Домкрат 6т',
        'МСЦ-1 Кладовая Домкрат 7т',
        'МСЦ-1 Кладовая Домкрат винтовой 2,5т',
        'МСЦ-1 Кладовая Домкрат УЛИГ 12т',
        'МСЦ-1 Кладовая Карданный вал',
        'МСЦ-1 Кладовая Механизм открывания дверей',
        'МСЦ-1 Кладовая Механизм промежуточный',
        'МСЦ-1 Кладовая ОБЩАЯ',
        'МСЦ-1 Кладовая Реактивная штанга',
        'МСЦ-1 Кладовая ЧПУ',
        'МСЦ-1 Кладовая Шкворень',
        'МСЦ-1 Кладовая Шприц рычажно-плунжерный',
        'МСЦ-1 Склад МАТЕРИАЛА',
        'МСЦ-1 Склад МАТЕРИАЛА (домкраты)',
        'МСЦ-1 Склад химикатов (мсц-6)',
        'МСЦ-1 Склад ЧПУ',
        'МСЦ-1 Склад ШТАНГИ',
        'МСЦ-1(4) Кладовая ВПЗК',
        'МСЦ-1(4) Кладовая Клапан сцепления',
        'МСЦ-1(4) Кладовая Корпус буксирного прибора',
        'МСЦ-1(4) Кладовая НПК',
        'МСЦ-1(4) Кладовая ОБЩАЯ',
        'МСЦ-1(4) Кладовая Цилиндр подпедальный',
        'МСЦ-1(м) Склад химикатов',
        'МСЦ-2 Кладовая Буксирный прибор',
        'МСЦ-2 Кладовая Буксирный прибор 631019...',
        'МСЦ-2 Кладовая Клапан новый',
        'МСЦ-2 Кладовая Кран',
        'МСЦ-2 Кладовая Крюк',
        'МСЦ-2 Кладовая Механизм подрессоривания',
        'МСЦ-2 Кладовая Поршень, корпус клапана',
        'МСЦ-2 Кладовая Распределитель',
        'МСЦ-2 Кладовая Розетка',
        'МСЦ-2 Кладовая Рулевая тяга',
        'МСЦ-2 Кладовая Рулевая тяга 4370',
        'МСЦ-2 Кладовая Рулевая тяга УЛИГ 040',
        'МСЦ-2 Кладовая Рулевой механизм',
        'МСЦ-2 Кладовая Сухарь, палец',
        'МСЦ-2 Кладовая Фланец',
        'МСЦ-2 Кладовая Шкворень',
        'МСЦ-2 Склад МАТЕРИАЛА (Масло индустриальное)',
        'МСЦ-2 Склад МАТЕРИАЛА (Металл)',
        'МСЦ-2 Склад МАТЕРИАЛА (Розетка)',
        'МСЦ-2 Склад МАТЕРИАЛА (Химикаты)',
        'МСЦ-3 Кладовая Амортизатор',
        'МСЦ-3 Кладовая Глушитель, хомут, шинковка',
        'МСЦ-3 Кладовая Демпфер',
        'МСЦ-3 Кладовая Диск и балка',
        'МСЦ-3 Кладовая Краскопульт ОСКАР',
        'МСЦ-3 Кладовая Механизм промежуточный',
        'МСЦ-3 Кладовая Нагнетатель масла',
        'МСЦ-3 Кладовая Основное производство',
        'МСЦ-3 Кладовая Прочие',
        'МСЦ-3 Кладовая Стакан, опора',
        'МСЦ-3 Кладовая Суппорт',
        'МСЦ-3 Кладовая Тележка, грабли веерные',
        'МСЦ-3 Кладовая Фиксатор, пневмокамера, знак ТИР',
        'МСЦ-3 Кладовая ШВД',
        'МСЦ-3 Кладовая ШНД',
        'МСЦ-3 Склад МАТЕРИАЛА',
        'МСЦ-3 Склад МАТЕРИАЛА--',
        'МСЦ-3 Склад МАТЕРИАЛА (Штамповка и ТПА)',
        'МСЦ-3 Ш (Склад химикатов)',
        'Склад МАТЕРИАЛА (покраска МСЦ2)',
        'Склад МАТЕРИАЛА (покраска МСЦ3)',
        'Склад МАТЕРИАЛА (ТГУ)',
        'Склад УТГиО (ТАБЛИЧКИ)',
    ];
    /** 
     * @var EntityManagerInterface $entityManager 
     */
    protected $entityManager;

    /** 
     * @var ListMaterialsService $listMaterialsService 
     */
    private $listMaterialsService;

    /** 
     * @var HTTPERPService $httpERPService 
     */
    private $httpERPService;

    protected static $defaultName = 'app:get:remains-purchased-plan';

    public function __construct(
        EntityManagerInterface $entityManager,
        ListMaterialsService $listMaterialsService,
        HTTPERPService $httpERPService
    ) {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->listMaterialsService = $listMaterialsService;
        $this->httpERPService = $httpERPService;
    }

    protected function configure()
    {
        $this
            ->addOption('id', null, InputOption::VALUE_REQUIRED, 'Plan id?')
            ->addOption('date', null, InputOption::VALUE_REQUIRED, 'Dare remains, format - 20220924235959?')
            ->setDescription('Получение остатков для покупных деталей и материалов по плану из ЕРП - php -d memory_limit=-1 bin/console app:get:remains-purchased-plan');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $planId = $input->getOption('id');
        if (empty($planId)) {
            $io->error('Не указан ID плана (--id) !');
            return Command::FAILURE;
        }

        $dateRemains = $input->getOption('date');
        if (empty($dateRemains)) {
            $io->error('Не указана дата остатков (--date) !');
            return Command::FAILURE;
        }

        // Get remains from ERP
        $erpRemains = $this->httpERPService->getRemains($dateRemains);
        if (empty($erpRemains)) {
            $io->error('Остатки не получены!');
            return Command::FAILURE;
        }

        // Get production plan
        $productionPlan = $this->entityManager->getRepository(ProductionPlan::class)->findOneBy(['id' => $planId]);

        $io->progressStart(count($productionPlan->getNeedPurchasedProducts()));

        foreach ($productionPlan->getNeedPurchasedProducts() as $needPurchasedProduct) {

            $balanceBuy = 0.0;
            $balanceManufacture = 0.0;

            foreach ($erpRemains as $erpRemain) {
                if (
                    (strtolower(trim($erpRemain['ОбозначениеКД'])) == strtolower(trim($needPurchasedProduct->getProduct()->getDesignation())) && !empty($needPurchasedProduct->getProduct()->getDesignation())) ||
                    (strtolower(trim($erpRemain['Номенклатура'])) == strtolower(trim($needPurchasedProduct->getProduct()->getName())) && !empty($needPurchasedProduct->getProduct()->getName())) ||
                    (strtolower(trim($erpRemain['Номенклатура'])) == strtolower(trim($needPurchasedProduct->getProduct()->getFullName())) && !empty($needPurchasedProduct->getProduct()->getFullName()))
                ) {
                    if (in_array($erpRemain['Склад'], self::STORE_BUY)) {
                        $balanceBuy += round((float)str_replace(',', '.', $erpRemain['ВНаличииОстаток']) ,6);
                    }
                    if (in_array($erpRemain['Склад'], self::STORE_MANUFACTURE)) {
                        $balanceManufacture += round((float)str_replace(',', '.', $erpRemain['ВНаличииОстаток']) ,6);
                    }

                    /*
                    if ($needPurchasedProduct->getProduct()->getId() == 14275) {
                        $io->note($erpRemain['ВНаличииОстаток']);
                        // $io->note($erpRemain['Склад']);
                        $io->note($erpRemain['Номенклатура']);
                        // $io->note($erpRemain['Характеристика']);
                        // $io->note($erpRemain['ОбозначениеКД']);
                        // $io->note($erpRemain['НаименованиеКД']);
                        $io->note($balanceBuy);
                        $io->note($balanceManufacture);
                    }
                    */
                    
                }
            }

            $needPurchasedProduct->setBalanceBuy($balanceBuy);
            $needPurchasedProduct->setBalanceManufacture($balanceManufacture);
            $amountResult = $needPurchasedProduct->getAmountAll() - $balanceBuy - $balanceManufacture;
            $amountResult = $amountResult > 0 ? $amountResult : 0;
            $needPurchasedProduct->setAmountResult($amountResult);
            $this->entityManager->persist($needPurchasedProduct);

            $io->progressAdvance();
        }

        $this->entityManager->flush();

        $io->progressFinish();

        $io->note('Id плана - ' . $planId);
        $io->note('Date для остатков - ' . $dateRemains);
        $io->success('Расчет остатков закончился!');

        return Command::SUCCESS;
    }
}

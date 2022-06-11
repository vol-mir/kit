<?php

namespace App\Command;

use App\Entity\Product;
use App\Entity\Specification;
use App\Entity\Unit;
use App\Entity\User;
use App\Entity\ProductType;
use App\Entity\ProductGroup;
use App\Entity\ProductKind;
use App\Entity\ProductCategory;
use App\Entity\Rendition;
use App\Entity\Structure;
use App\Entity\NormDocument;
use App\Entity\MaterialNorm;
use App\Repository\UnitRepository;
use App\Repository\ProductRepository;
use App\Repository\NormDocumentRepository;
use App\Repository\RenditionRepository;
use App\Repository\UserRepository;
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

class ExportProductPDOCommand extends Command
{
    private $em;
    private $log;
    private $unitRepository;
    private $productRepository;

    private $normDocumentRepository;
    private $renditionRepository;

    private $userRepository;

    protected static $defaultName = 'app:export:product-pdo';

    public function __construct(
        EntityManagerInterface $em,
        LoggerInterface $logger,
        UnitRepository $unitRepository,
        ProductRepository $productRepository,
        NormDocumentRepository $normDocumentRepository,
        RenditionRepository $renditionRepository,
        UserRepository $userRepository
    )
    {
        parent::__construct();

        $this->em = $em;
        $this->log = $logger;
        $this->unitRepository = $unitRepository;
        $this->productRepository = $productRepository;
        $this->normDocumentRepository = $normDocumentRepository;
        $this->renditionRepository = $renditionRepository;
        $this->userRepository = $userRepository;
    }

    protected function configure()
    {
        $this->setDescription('Export detail norm');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $spreadsheet = IOFactory::load(__DIR__.'/detail.xlsx');
        $sheet = $spreadsheet->getSheetByName('detail');


        //3699
        $io->progressStart(10);
        for ($i = 2; $i <= 60; $i++) {
            $io->progressAdvance();


            $idDetail = 0;
            try {
                $idDetail = $sheet->getCell('A'.strval($i))->getValue();
            } catch (Exception $e) {
                $idDetail = 0;
            }

            $numberDetail = 0;
            try {
                $numberDetail = $sheet->getCell('C'.strval($i))->getValue();
            } catch (Exception $e) {
                $numberDetail = 0;
            }

            if ($numberDetail==0 || $idDetail == 0) {
                continue;
            }

            $numberDetail = preg_replace(['/\s\s+/', '/[^A-Za-z0-9_]/'], '', $numberDetail);

            $products = $this->productRepository->findAll();

            foreach ($products as $product) {
                $productNumberDetail = preg_replace(['/\s\s+/', '/[^A-Za-z0-9_]/'], '', $product->getDesignation());

                if ($productNumberDetail == $numberDetail) {
                    $product->setIdPdo($idDetail);

                    $this->em->persist($product);
                    $this->em->flush();
                    break;
                }
            }

        }

        $io->progressFinish();
        $io->success('Export detail norm success');
        $this->log->info('app:export:product-pdo - Export detail norm success');

        return Command::SUCCESS;
    }
}

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

class ExportProductNormDocumentCommand extends Command
{
    private $em;
    private $log;
    private $unitRepository;
    private $productRepository;

    private $normDocumentRepository;
    private $renditionRepository;

    private $userRepository;

    protected static $defaultName = 'app:export:product-norm-document';

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
        $this->setDescription('Export product-norm-document');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $spreadsheet = IOFactory::load('/norm2.xlsx');
        //get current active sheet (first sheet)
        $sheet = $spreadsheet->getSheetByName('norms');

        $user = $this->userRepository->find(1);

        $io->progressStart(1304);
        //for ($i = 2; $i <= 23936; $i++) {
        for ($i = 2; $i <= 1304; $i++) {
            $io->progressAdvance();

            $idPr = 0;
            try {
                $idPr = $sheet->getCell('B'.strval($i))->getValue();
            } catch (Exception $e) {
               $idPr = 0;
            }

            $idDocumKalk = 0;
            try {
                $idDocumKalk = $sheet->getCell('A'.strval($i))->getValue();
            } catch (Exception $e) {
                $idDocumKalk = 0;
            }

            $idPr = (int)strval($idPr);
            $idDocumKalk = (int)strval($idDocumKalk);

            //$io->note('---->'. strval($i).' '.$idPr.' '.$idDocumKalk);
            //continue;

            $product = $this->productRepository->findForExcel($idPr);



            if (!$product) {
                $io->note('Not found'. strval($i));
                $io->newLine();
                continue;
            }

            $rendition = $this->renditionRepository->find(1);


            $normDocument = new NormDocument();

            $normDocument
                ->setStatus(NormDocument::IN_DEVELOPING)
                ->setProduct($product)
                ->setDateDocument(new \DateTime())
                ->setRendition($rendition)
                ->setIdAvt($idDocumKalk);

            $normDocument->setUser($user);

            $this->em->persist($normDocument);
            $this->em->flush();
        }

        $io->progressFinish();
        $io->success('Export product norm success');
        $this->log->info('app:export:product-norm-document - Export product norm success');



        return Command::SUCCESS;
    }
}

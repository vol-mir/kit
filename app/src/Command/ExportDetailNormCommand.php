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

class ExportDetailNormCommand extends Command
{
    private $em;
    private $log;
    private $unitRepository;
    private $productRepository;

    private $normDocumentRepository;
    private $renditionRepository;

    private $userRepository;

    protected static $defaultName = 'app:export:detail-norm';

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

        $spreadsheet = IOFactory::load('/norm1.xlsx');
        //get current active sheet (first sheet)
        $sheet = $spreadsheet->getSheetByName('norms');

        $user = $this->userRepository->find(1);

        $io->progressStart(23936);
        //for ($i = 2; $i <= 23936; $i++) {
        for ($i = 2; $i <= 23936; $i++) {
            $io->progressAdvance();


            $idDetail = 0;
            try {
                $idDetail = (int)$sheet->getCell('B'.strval($i))->getValue();
            } catch (Exception $e) {
                $idDetail = 0;
            }

            if ($idDetail==0 || $idDetail==1  || $idDetail==2) {
                continue;
            }


            $idMaterial = 0;
            try {
                $idMaterial = (int)$sheet->getCell('C'.strval($i))->getValue();
            } catch (Exception $e) {
                $idMaterial = 0;
            }

            if ($idMaterial==0 || $idMaterial==1) {
                continue;
            }

            $amount = 0;
            try {
                $amount = (float)$sheet->getCell('A'.strval($i))->getValue();
            } catch (Exception $e) {
                $amount = 0;
            }


            $idUnit = 0;
            try {
                $idUnit = (int)$sheet->getCell('D'.strval($i))->getValue();
            } catch (Exception $e) {
                $idUnit = 0;
            }


            $idUnitKIT = 1;

            if ($idUnit == 3) {
                //шт
                $idUnitKIT = 2;

            } else if ($idUnit == 5) {
                //кг
                $idUnitKIT = 3;

            } else if ($idUnit == 6) {
                //л
                $idUnitKIT = 5;

            } else if ($idUnit == 8) {
                //м2
                $idUnitKIT = 6;

            } else if ($idUnit == 7) {
                //м3
                $idUnitKIT = 7;

            } else if ($idUnit == 9) {
                //мл
                $idUnitKIT = 8;

            } else if ($idUnit == 10) {
                //мм
                $idUnitKIT = 9;

            } else if ($idUnit == 2) {
                //п.м.
                $idUnitKIT = 4;

            } else if ($idUnit == 4) {
                //руб
                $idUnitKIT = 1;

            } else if ($idUnit == 11) {
                //см3
                $idUnitKIT = 10;

            }


            $unit = $this->unitRepository->findUnitForExcel($idUnitKIT);


            //$io->note($unit->getName());

            //$io->newLine();


            $material = $this->productRepository->findMaterialForExcel($idMaterial);

            $issueUnit = $material->getUnit();

            if ($issueUnit && $material->getUnit()->getId() != 1) {
                /*if ($issueUnit->getName() != $unit->getName()) {
                    $logger->info('[-----] --- Unit ' . strval($i));
                }*/
            } else {

                $material->setUnit($unit);

                $this->em->persist($material);
                $this->em->flush();

            }


            $detail = $this->productRepository->findDetailForExcel($idDetail);

            if (!$detail) {
                $io->note('Not found'. strval($i));
                $io->newLine();
                continue;
            }


            $normDocument = $this->normDocumentRepository->findNormDocumentForExcel($detail->getId());

            if (!$normDocument) {


                $rendition = $this->renditionRepository->find(1);


                $normDocument = new NormDocument();

                $normDocument
                    ->setStatus(NormDocument::IN_DEVELOPING)
                    ->setProduct($detail)
                    ->setDateDocument(new \DateTime())
                    ->setRendition($rendition);

                $normDocument->setUser($user);

                $this->em->persist($normDocument);
                $this->em->flush();


                $materialNormNew = new MaterialNorm();

                $materialNormNew
                    ->setAmount((float)$amount)
                    ->setNormDocument($normDocument)
                    ->setIndexNumber((int)1)
                    ->setMaterial($material);

                $this->em->persist($materialNormNew);
                $this->em->flush();

            }


        }

        $io->progressFinish();
        $io->success('Export detail norm success');
        $this->log->info('app:export:detail-norm - Export detail norm success');


        /*
        $arg1 = $input->getArgument('arg1');

        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        if ($input->getOption('option1')) {
            // ...
        }

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');*/

        return Command::SUCCESS;
    }
}

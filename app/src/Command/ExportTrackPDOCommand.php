<?php

namespace App\Command;

use App\Entity\Product;
use App\Entity\Specification;
use App\Entity\TrackDocument;
use App\Entity\Track;
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
use App\Repository\TrackRepository;
use App\Repository\TrackDocumentRepository;
use App\Repository\DepartmentRepository;
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

class ExportTrackPDOCommand extends Command
{
    private $em;
    private $log;
    private $unitRepository;
    private $productRepository;

    private $normDocumentRepository;
    private $renditionRepository;

    private $userRepository;

    private $trackRepository;

    private $trackDocumentRepository;

    private $departmentRepository;

    protected static $defaultName = 'app:export:track-pdo';

    public function __construct(
        EntityManagerInterface $em,
        LoggerInterface $logger,
        UnitRepository $unitRepository,
        ProductRepository $productRepository,
        NormDocumentRepository $normDocumentRepository,
        RenditionRepository $renditionRepository,
        UserRepository $userRepository,
        TrackRepository $trackRepository,
        TrackDocumentRepository $trackDocumentRepository,
        DepartmentRepository $departmentRepository
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
        $this->trackRepository = $trackRepository;
        $this->trackDocumentRepository = $trackDocumentRepository;
        $this->departmentRepository = $departmentRepository;
    }

    protected function configure()
    {
        $this->setDescription('Export track');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $spreadsheet = IOFactory::load(__DIR__.'/detceh.xlsx');
        $sheet = $spreadsheet->getSheetByName('detceh');

        $io->progressStart(10);
        for ($i = 2; $i <= 10; $i++) {
            $io->progressAdvance();


            $idDetail = 0;
            try {
                $idDetail = $sheet->getCell('A'.strval($i))->getValue();
            } catch (Exception $e) {
                $idDetail = 0;
            }

            $idCeh = 0;
            try {
                $idCeh = $sheet->getCell('B'.strval($i))->getValue();
            } catch (Exception $e) {
                $idCeh = 0;
            }

            if ($idDetail==0 || $idCeh == 0) {
                continue;
            }

            $product = $this->productRepository->findProductForPDO($idDetail);

            $department = $this->departmentRepository->findDepartmentForPDO($idCeh);

            if (!$product) continue;

            if (!$department) continue;



            $trackDocument = $this->trackDocumentRepository->findDocumentForPDO($product->getId());


            if (!$trackDocument) {
                $trackDocument = new TrackDocument();

                $rendition = $this->renditionRepository->find(1);
                $user = $this->userRepository->find(1);

                

                $trackDocument
                    ->setStatus(TrackDocument::IN_DEVELOPING)
                    ->setProduct($product)
                    ->setDateStart(new \DateTime())
                    ->setRendition($rendition)
                    ->setUser($user);



                $this->em->persist($trackDocument);
                $this->em->flush();

            }




            $newIndexNumber = $this->trackRepository->getMaxIndexNumber($trackDocument->getId());

            $trackNew = new Track();

            $trackNew
                ->setIndexNumber($newIndexNumber + 1)
                ->setTrackDocument($trackDocument)
                ->setDepartment($department);

            $this->em->persist($trackNew);
            $this->em->flush();
        }

        $io->progressFinish();
        $io->success('Export track success');
        $this->log->info('app:export:track-pdo - Export track norm success');

        return Command::SUCCESS;
    }
}

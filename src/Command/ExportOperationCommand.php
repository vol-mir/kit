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
use App\Entity\TechnologicalOperation;
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

class ExportOperationCommand extends Command
{
    private $em;
    private $log;

    protected static $defaultName = 'app:export:operation';

    public function __construct(
        EntityManagerInterface $em,
        LoggerInterface $logger
    )
    {
        parent::__construct();

        $this->em = $em;
        $this->log = $logger;
    }

    protected function configure()
    {
        $this->setDescription('Export operation');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $spreadsheet = IOFactory::load(__DIR__.'/operation.xlsx');
        $sheet = $spreadsheet->getSheetByName('operation');

        $io->progressStart(1045);
        for ($i = 2; $i <= 1045; $i++) {
            $io->progressAdvance();


            $codeOperation = '';
            try {
                $codeOperation = $sheet->getCell('A'.strval($i))->getValue();
            } catch (Exception $e) {
                $codeOperation = '';
            }

            $nameOperation = '';
            try {
                $nameOperation = $sheet->getCell('B'.strval($i))->getValue();
            } catch (Exception $e) {
                $nameOperation = '';
            }

            $note = '';
            try {
                $note = $sheet->getCell('C'.strval($i))->getValue();
            } catch (Exception $e) {
                $note = '';
            }


            $typeOperation = '';
            try {
                $typeOperation = $sheet->getCell('D'.strval($i))->getValue();
            } catch (Exception $e) {
                $typeOperation = '';
            }


            $codeTypeOperation = '';
            try {
                $codeTypeOperation = $sheet->getCell('E'.strval($i))->getValue();
            } catch (Exception $e) {
                $codeTypeOperation = '';
            }

            if (!$codeOperation && !$nameOperation) {
                continue;
            }


            $technologicalOperation = new TechnologicalOperation();


            $technologicalOperation
                ->setName($nameOperation)
                ->setCodeOperation($codeOperation)
                ->setTypeOperation($typeOperation)
                ->setCodeTypeOperation($codeTypeOperation)
                ->setNote($note);



            $this->em->persist($technologicalOperation);
            $this->em->flush();


        }

        $io->progressFinish();
        $io->success('Export track success');
        $this->log->info('app:export:operation - Export operation success');

        return Command::SUCCESS;
    }
}

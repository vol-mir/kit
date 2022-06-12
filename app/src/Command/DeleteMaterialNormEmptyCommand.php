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
use App\Repository\MaterialNormRepository;
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

class DeleteMaterialNormEmptyCommand extends Command
{
    private $em;
    private $log;
    private $unitRepository;
    private $productRepository;

    private $normDocumentRepository;
    private $renditionRepository;

    private $userRepository;

     private $materialNormRepository;

    protected static $defaultName = 'app:delete:material-norm-empty';

    public function __construct(
        EntityManagerInterface $em,
        LoggerInterface $logger,
        UnitRepository $unitRepository,
        ProductRepository $productRepository,
        NormDocumentRepository $normDocumentRepository,
        RenditionRepository $renditionRepository,
        UserRepository $userRepository,
        MaterialNormRepository $materialNormRepository
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
        $this->materialNormRepository = $materialNormRepository;
    }

    protected function configure()
    {
        $this->setDescription('Delete material norm');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $normDocuments = $this->normDocumentRepository->findAll();

        $io->progressStart(count($normDocuments));

        foreach ($normDocuments as $normDocument) {

            if (count($normDocument->getMaterialNorms()) == 0) {

                $io->success('Delete ' . $normDocument->getId());

                $this->em->remove($normDocument);
                $this->em->flush();

            }

        }

        $io->progressFinish();
        $io->success('Export material norm success');
        $this->log->info('app:export:material-norm - Export material norm success');

        return Command::SUCCESS;
    }
}

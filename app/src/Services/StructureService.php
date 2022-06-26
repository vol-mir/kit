<?php

namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\StructureReplacement;

class StructureService
{
    /** @var EntityManagerInterface $entityManager */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function arrIdsMainReplacement(int $structureId)
    {
    	$structureMainId = null;
    	$structureReplacementId = null;

    	$countStructureMainReplacement = $this->entityManager->getRepository(StructureReplacement::class)->countStructureMainReplacement($structureId);

        if ($countStructureMainReplacement == 0) {
        	$structureReplacementId = $structureId;

            $structureForMain = $this->entityManager->getRepository(StructureReplacement::class)->findOneBy(['structure_replacement' => $structureId]);
            $structureMainId = $structureForMain?$structureForMain->getStructureMain()->getId():null;


        } else {
        	$structureMainId = $structureId;
        }

        return [
        	$structureMainId,
        	$structureReplacementId
        ];
    }


}

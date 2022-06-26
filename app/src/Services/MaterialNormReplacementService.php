<?php

namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\MaterialNormReplacement;
use Twig\Environment;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class MaterialNormReplacementService
{
    /** @var EntityManagerInterface $entityManager */
    private $entityManager;

    private $twig;

    private $router;

    public function __construct(EntityManagerInterface $entityManager, Environment $twig, UrlGeneratorInterface $router)
    {
        $this->entityManager = $entityManager;
        $this->twig = $twig;
        $this->router = $router;
    }

    public function getDataForDataTable($columns, $objects, $materialNormReplacementId, $normDocument, $user)
    {
        $data = [];

        foreach ($objects as $materialNorm) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'indexNumber':
                        {
                            $elementTemp = "";

                            if ($materialNormReplacementId != $materialNorm->getMaterialNormReplacement()->getId()) {
                                $elementTemp = $materialNorm->getMaterialNormReplacement()->getIndexNumber();
                            } else {
                                $elementTemp = $materialNorm->getMaterialNormMain()->getIndexNumber();
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'name':
                        {
                            $elementTemp = "";

                            if ($materialNormReplacementId != $materialNorm->getMaterialNormReplacement()->getId()) {

                                $urlGenerate = $this->router->generate('material_show', ['id' => $materialNorm->getMaterialNormReplacement()->getMaterial()->getId()]);

                                $elementTemp = "<a href='" . $urlGenerate . "' title=" . $materialNorm->getMaterialNormReplacement()->getMaterial()->getFullName() . ">" . $materialNorm->getMaterialNormReplacement()->getMaterial()->getFullName() . "</a>";

                            } else {

                                $urlGenerate = $this->router->generate('material_show', ['id' => $materialNorm->getMaterialNormMain()->getMaterial()->getId()]);

                                $elementTemp = "<a href='" . $urlGenerate . "' title=" . $materialNorm->getMaterialNormMain()->getMaterial()->getFullName() . ">" . $materialNorm->getMaterialNormMain()->getMaterial()->getFullName() . "</a>";
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'unit':
                        {
                            $elementTemp = "";

                            if ($materialNormReplacementId != $materialNorm->getMaterialNormReplacement()->getId()) {
                                $elementTemp = $materialNorm->getMaterialNormReplacement()->getMaterial()->getUnit()->getName();
                            } else {
                                $elementTemp = $materialNorm->getMaterialNormMain()->getMaterial()->getUnit()->getName();
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'amount':
                        {
                            $elementTemp = "";

                            if ($materialNormReplacementId != $materialNorm->getMaterialNormReplacement()->getId()) {
                                $elementTemp = $materialNorm->getMaterialNormReplacement()->getAmount()?:"";
                            } else {
                                $elementTemp = $materialNorm->getMaterialNormMain()->getAmount()?:"";
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                     case 'mainReplacement':
                        {
                            $elementTemp = "";

                            if ($materialNormReplacementId != $materialNorm->getMaterialNormReplacement()->getId()) {

                                if ($materialNorm->getMaterialNormReplacement()->getMainReplacement() == 1) {
                                    $elementTemp = "<span class='badge badge-success'>Да</span>";
                                } else {
                                    $elementTemp = "<span class='badge badge-warning'>Замена</span>";
                                }

                            } else {

                                if ($materialNorm->getMaterialNormMain()->getMainReplacement() == 1) {
                                    $elementTemp = "<span class='badge badge-success'>Да</span>";
                                } else {
                                    $elementTemp = "<span class='badge badge-warning'>Замена</span>";
                                }
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'note':
                        {
                            $elementTemp = "";

                            if ($materialNormReplacementId != $materialNorm->getMaterialNormReplacement()->getId()) {
                                $elementTemp = $materialNorm->getMaterialNormReplacement()->getNote();
                            } else {
                                $elementTemp = $materialNorm->getMaterialNormMain()->getNote();
                            }
/*

                            $elementTemp = $materialNorm->getNote();
                            $materialNormMainId = null;
                            $materialNormReplacementId = null;

                            list($materialNormMainId, $materialNormReplacementId) = $this->materialNormService->arrIdsMainReplacement($materialNorm->getId());

                            $materialNormRepl =$this->entityManager->getRepository(MaterialNormReplacement::class)->getListMaterialNormReplacement($materialNormMainId, $materialNormReplacementId);

                            if ($materialNormRepl['countResult'] > 0) {

                                foreach ($materialNormRepl['results'] as $structureTempRepl) {
                                    if (strlen($elementTemp) > 0) {
                                        $elementTemp .= ',';
                                    }
                                    $elementTemp .= ' замена на поз. ';
                                    if ($materialNormReplacementId != $materialNormTempRepl->getMaterialNormReplacement()->getId()) {
                                        $elementTemp .= $materialNormTempRepl->getMaterialNormReplacement()->getPosition();
                                    } else {
                                        $elementTemp .= $materialNormTempRepl->getMaterialNormMain()->getPosition();
                                    }

                                }

                            }

*/
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $user->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $user->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $user->getRoles(), true);

                            $urlReplacement =  '';
                            $urlEdit = '';
                            $idDelete = '';
                            $idUp = '';
                            $idDown = '';
                            $idMove = '';

                            $isClose = $normDocument->getClose()?$normDocument->getClose():0;
                            $spcStatus = $normDocument->getStatus();

                            if ($isAdmin) {
                               $isClose = 0;
                            }

                            if ($isAdmin || ($isOGT && $isClose == 0)) {
                                $idDelete = $materialNorm->getId();
                            }

                            $elementTemp = $this->twig->render('default/table_group_btn_udmred.html.twig', [
                                'urlReplacement' => $urlReplacement,
                                'urlEdit' => $urlEdit,
                                'idDelete' => $idDelete,
                                'idUp' => $idUp,
                                'idDown' => $idDown,
                                'idMove' => $idMove,

                            ]);

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                }
            }
            $data[] = $dataTemp;
        }

        return $data;
    }



    public function arrIdsMainReplacement(int $materialNormId)
    {
    	$materialNormMainId = null;
    	$materialNormReplacementId = null;

    	$countMaterialNormMainReplacement = $this->entityManager->getRepository(MaterialNormReplacement::class)->countMaterialNormMainReplacement($materialNormId);

        if ($countMaterialNormMainReplacement == 0) {
        	$materialNormReplacementId = $materialNormId;

            $materialNormForMain = $this->entityManager->getRepository(MaterialNormReplacement::class)->findOneBy(['material_norm_replacement' => $materialNormId]);
            $materialNormMainId = $materialNormForMain?$materialNormForMain->getMaterialNormMain()->getId():null;


        } else {
        	$materialNormMainId = $materialNormId;
        }

        return [
        	$materialNormMainId,
        	$materialNormReplacementId
        ];
    }


}

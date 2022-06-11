<?php

namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\MaterialNormReplacement;
use Twig\Environment;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class MaterialNormService
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

    public function getDataForDataTable($columns, $objects, $normDocument, $user)
    {
        $data = [];

        foreach ($objects as $materialNorm) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'indexNumber':
                        {
                            $elementTemp = $materialNorm->getIndexNumber();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'name':
                        {
                            $urlGenerate = $this->router->generate('material_show', ['id' => $materialNorm->getMaterial()->getId()]);
                            $elementTemp = "<a href='" . $urlGenerate . "' title=" . $materialNorm->getMaterial()->getFullName() . ">" . $materialNorm->getMaterial()->getFullName() . "</a>";
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'unit':
                        {
                            $elementTemp = $materialNorm->getMaterial()->getUnit()->getName();
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'amount':
                        {
                            $elementTemp = $materialNorm->getAmount()?:"";
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'note':
                        {
                            $elementTemp = $materialNorm->getNote();
                            $materialNormMainId = null;
                            $materialNormReplacementId = null;

                            list($materialNormMainId, $materialNormReplacementId) = $this->arrIdsMainReplacement($materialNorm->getId());

                            $materialNormRepl =$this->entityManager->getRepository(MaterialNormReplacement::class)->getListMaterialNormReplacement($materialNormMainId, $materialNormReplacementId);

                            if ($materialNormRepl['countResult'] > 0) {

                                foreach ($materialNormRepl['results'] as $materialNormTempRepl) {
                                    if (strlen($elementTemp) > 0) {
                                        $elementTemp .= ',';
                                    }
                                    $elementTemp .= ' замена на поз. ';
                                    if ($materialNormReplacementId != $materialNormTempRepl->getMaterialNormReplacement()->getId()) {
                                        $elementTemp .= $materialNormTempRepl->getMaterialNormReplacement()->getIndexNumber();
                                    } else {
                                        $elementTemp .= $materialNormTempRepl->getMaterialNormMain()->getIndexNumber();
                                    }

                                }

                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'mainReplacement':
                        {
                            if ($materialNorm->getMainReplacement() == 1) {
                                $elementTemp = "<span class='badge badge-success'>Да</span>";
                            } else {
                                $elementTemp = "<span class='badge badge-warning'>Замена</span>";
                            }
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
                            $nrmStatus = $normDocument->getStatus();

                            if ($isAdmin) {
                               $isClose = 0;
                            }

                            if ($isAdmin || ($isOGT && $isClose == 0)) {
                                $urlReplacement = $this->router->generate('consumption_element_replacement', ['id' => $materialNorm->getId(),'norm_document_id' => $materialNorm->getNormDocument()->getId()]);
                                $urlEdit = $this->router->generate('consumption_material_edit', ['norm_document_id' => $materialNorm->getNormDocument()->getId() , 'id' => $materialNorm->getId()]);
                                $idDelete = $materialNorm->getId();
                                $idUp = $materialNorm->getId();
                                $idDown = $materialNorm->getId();
                                $idMove = $materialNorm->getId();
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

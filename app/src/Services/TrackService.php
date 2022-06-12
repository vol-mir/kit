<?php

namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TrackService
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

    public function getDataForDataTable($columns, $objects, $trackDocument, $user)
    {
        $data = [];

        foreach ($objects as $track) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'indexNumber':
                        {
                            $elementTemp = $track->getIndexNumber();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'name_department':
                        {
                            $elementTemp = $track->getDepartment()->getName();
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'number_department':
                        {
                            $tempNumberArea = $track->getDepartment()->getNumberArea();
                            $tempNumberDepartment = $track->getDepartment()->getNumberDepartment();
                            $elementTemp = $tempNumberDepartment;
                            if (strlen($tempNumberArea) > 0) {
                                $elementTemp .= ' (' . $tempNumberArea . ')';
                            }
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'technological_operation':
                        {
                            $elementTemp = $track->getTechnologicalOperation()?$track->getTechnologicalOperation()->getFullName():'';
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'time_cycle':
                        {
                            $elementTemp = $track->getTimeCycle()?$track->getTimeCycle():'';
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'time_piece':
                        {
                            $elementTemp = $track->getTimePiece()?$track->getTimePiece():'';
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'time_processing':
                        {
                            $elementTemp = $track->getTimeProcessing()?$track->getTimeProcessing():'';
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'number_operation':
                        {
                            $elementTemp = $track->getNumberOperation()?$track->getNumberOperation():'';
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

                            $isClose = $trackDocument->getClose()?$trackDocument->getClose():0;
                            $trackStatus = $trackDocument->getStatus();

                            if ($isAdmin) {
                               $isClose = 0;
                            }

                            if ($isAdmin || ($isOGT && $isClose == 0)) {
                                $urlEdit = $this->router->generate('track_edit', ['track_document_id' => $track->getTrackDocument()->getId() , 'id' => $track->getId()]);
                                $idDelete = $track->getId();
                                $idUp = $track->getId();
                                $idDown = $track->getId();
                                $idMove = $track->getId();
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
}

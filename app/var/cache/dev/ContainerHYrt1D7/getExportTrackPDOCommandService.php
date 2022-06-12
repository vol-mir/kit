<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExportTrackPDOCommandService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Command\ExportTrackPDOCommand' shared autowired service.
     *
     * @return \App\Command\ExportTrackPDOCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Command\\ExportTrackPDOCommand'] = $instance = new \App\Command\ExportTrackPDOCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->privates['App\\Repository\\UnitRepository'] ?? $container->load('getUnitRepositoryService')), ($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')), ($container->privates['App\\Repository\\NormDocumentRepository'] ?? $container->load('getNormDocumentRepositoryService')), ($container->privates['App\\Repository\\RenditionRepository'] ?? $container->load('getRenditionRepositoryService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\TrackRepository'] ?? $container->load('getTrackRepositoryService')), ($container->privates['App\\Repository\\TrackDocumentRepository'] ?? $container->load('getTrackDocumentRepositoryService')), ($container->privates['App\\Repository\\DepartmentRepository'] ?? $container->load('getDepartmentRepositoryService')));

        $instance->setName('app:export:track-pdo');

        return $instance;
    }
}

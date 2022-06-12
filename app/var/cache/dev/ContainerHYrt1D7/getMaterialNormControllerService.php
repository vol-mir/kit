<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaterialNormControllerService extends App_KernelDevContainer
{
    /*
     * Gets the public 'App\Controller\MaterialNormController' shared autowired service.
     *
     * @return \App\Controller\MaterialNormController
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());
        $b = ($container->services['twig'] ?? $container->getTwigService());
        $c = ($container->services['router'] ?? $container->getRouterService());

        $container->services['App\\Controller\\MaterialNormController'] = $instance = new \App\Controller\MaterialNormController($a, ($container->services['translator'] ?? $container->getTranslatorService()), new \App\Services\MaterialNormService($a, $b, $c), ($container->privates['App\\Services\\DataTableService'] ?? $container->load('getDataTableServiceService')), ($container->privates['App\\Repository\\MaterialNormRepository'] ?? $container->load('getMaterialNormRepositoryService')), ($container->privates['App\\Repository\\MaterialNormReplacementRepository'] ?? $container->load('getMaterialNormReplacementRepositoryService')), new \App\Services\MaterialNormReplacementService($a, $b, $c));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\MaterialNormController', $container));

        return $instance;
    }
}

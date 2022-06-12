<?php

namespace Container6x6jTjg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaterialControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MaterialController' shared autowired service.
     *
     * @return \App\Controller\MaterialController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MaterialController.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        $container->services['App\\Controller\\MaterialController'] = $instance = new \App\Controller\MaterialController($a, ($container->services['translator'] ?? $container->getTranslatorService()), $a, ($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\MaterialController', $container));

        return $instance;
    }
}

<?php

namespace Container6x6jTjg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDepartmentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DepartmentController' shared autowired service.
     *
     * @return \App\Controller\DepartmentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DepartmentController.php';

        $container->services['App\\Controller\\DepartmentController'] = $instance = new \App\Controller\DepartmentController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['App\\Repository\\DepartmentRepository'] ?? $container->load('getDepartmentRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\DepartmentController', $container));

        return $instance;
    }
}
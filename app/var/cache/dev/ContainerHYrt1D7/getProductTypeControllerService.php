<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductTypeControllerService extends App_KernelDevContainer
{
    /*
     * Gets the public 'App\Controller\ProductTypeController' shared autowired service.
     *
     * @return \App\Controller\ProductTypeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ProductTypeController'] = $instance = new \App\Controller\ProductTypeController(($container->services['translator'] ?? $container->getTranslatorService()));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ProductTypeController', $container));

        return $instance;
    }
}

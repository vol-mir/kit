<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C8ooNTService extends App_KernelDevContainer
{
    /*
     * Gets the private '.service_locator.C8oo_nT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C8oo_nT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'product_category' => ['privates', '.errored..service_locator.C8oo_nT.App\\Entity\\ProductCategory', NULL, 'Cannot autowire service ".service_locator.C8oo_nT": it references class "App\\Entity\\ProductCategory" but no such service exists.'],
        ], [
            'product_category' => 'App\\Entity\\ProductCategory',
        ]);
    }
}
<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Rc9uH46Service extends App_KernelDevContainer
{
    /*
     * Gets the private '.service_locator.Rc9uH46' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Rc9uH46'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'product' => ['privates', '.errored..service_locator.Rc9uH46.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.Rc9uH46": it references class "App\\Entity\\Product" but no such service exists.'],
        ], [
            'product' => 'App\\Entity\\Product',
        ]);
    }
}

<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0QLLOGmService extends App_KernelDevContainer
{
    /*
     * Gets the private '.service_locator.0QLLOGm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0QLLOGm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
            'user' => ['privates', '.errored..service_locator.0QLLOGm.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.0QLLOGm": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'translator' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}

<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ktk08DService extends App_KernelDevContainer
{
    /*
     * Gets the private '.service_locator._Ktk08D' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._Ktk08D'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'specification' => ['privates', '.errored..service_locator._Ktk08D.App\\Entity\\Specification', NULL, 'Cannot autowire service ".service_locator._Ktk08D": it references class "App\\Entity\\Specification" but no such service exists.'],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'logger' => '?',
            'specification' => 'App\\Entity\\Specification',
            'translator' => '?',
        ]);
    }
}

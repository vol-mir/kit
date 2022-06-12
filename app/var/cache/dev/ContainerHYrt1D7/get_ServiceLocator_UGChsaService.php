<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UGChsaService extends App_KernelDevContainer
{
    /*
     * Gets the private '.service_locator.UGChsa_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UGChsa_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calculation' => ['privates', '.errored..service_locator.UGChsa_.App\\Entity\\Calculation', NULL, 'Cannot autowire service ".service_locator.UGChsa_": it references class "App\\Entity\\Calculation" but no such service exists.'],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'calculation' => 'App\\Entity\\Calculation',
            'translator' => '?',
        ]);
    }
}
<?php

namespace Container6x6jTjg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RGNFutfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RGNFutf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RGNFutf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'normDocument' => ['privates', '.errored..service_locator.RGNFutf.App\\Entity\\NormDocument', NULL, 'Cannot autowire service ".service_locator.RGNFutf": it references class "App\\Entity\\NormDocument" but no such service exists.'],
        ], [
            'logger' => '?',
            'normDocument' => 'App\\Entity\\NormDocument',
        ]);
    }
}
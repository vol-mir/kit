<?php

namespace Container6x6jTjg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GUSxWHOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gUSxWHO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gUSxWHO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
            'user' => ['privates', '.errored..service_locator.gUSxWHO.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.gUSxWHO": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'encoder' => '?',
            'translator' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
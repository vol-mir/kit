<?php

namespace Container6x6jTjg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8vtcnzpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8vtcnzp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8vtcnzp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calculation' => ['privates', '.errored..service_locator.8vtcnzp.App\\Entity\\Calculation', NULL, 'Cannot autowire service ".service_locator.8vtcnzp": it references class "App\\Entity\\Calculation" but no such service exists.'],
        ], [
            'calculation' => 'App\\Entity\\Calculation',
        ]);
    }
}

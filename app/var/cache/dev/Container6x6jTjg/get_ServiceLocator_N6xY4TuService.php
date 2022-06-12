<?php

namespace Container6x6jTjg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N6xY4TuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.n6xY4Tu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.n6xY4Tu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'product_kind' => ['privates', '.errored..service_locator.n6xY4Tu.App\\Entity\\ProductKind', NULL, 'Cannot autowire service ".service_locator.n6xY4Tu": it references class "App\\Entity\\ProductKind" but no such service exists.'],
        ], [
            'product_kind' => 'App\\Entity\\ProductKind',
        ]);
    }
}

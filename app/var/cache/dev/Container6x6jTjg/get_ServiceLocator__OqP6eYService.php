<?php

namespace Container6x6jTjg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__OqP6eYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..OqP6eY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..OqP6eY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'material' => ['privates', '.errored..service_locator..OqP6eY.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator..OqP6eY": it references class "App\\Entity\\Product" but no such service exists.'],
        ], [
            'material' => 'App\\Entity\\Product',
        ]);
    }
}

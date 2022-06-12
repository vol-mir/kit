<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W2xpoDService extends App_KernelDevContainer
{
    /*
     * Gets the private '.service_locator._w2xpoD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._w2xpoD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'specification' => ['privates', '.errored..service_locator._w2xpoD.App\\Entity\\Specification', NULL, 'Cannot autowire service ".service_locator._w2xpoD": it references class "App\\Entity\\Specification" but no such service exists.'],
            'structureReplacement' => ['privates', '.errored..service_locator._w2xpoD.App\\Entity\\StructureReplacement', NULL, 'Cannot autowire service ".service_locator._w2xpoD": it references class "App\\Entity\\StructureReplacement" but no such service exists.'],
        ], [
            'specification' => 'App\\Entity\\Specification',
            'structureReplacement' => 'App\\Entity\\StructureReplacement',
        ]);
    }
}

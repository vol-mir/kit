<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__BKtgG4Service extends App_KernelDevContainer
{
    /*
     * Gets the private '.service_locator..bKtgG4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..bKtgG4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'product_group' => ['privates', '.errored..service_locator..bKtgG4.App\\Entity\\ProductGroup', NULL, 'Cannot autowire service ".service_locator..bKtgG4": it references class "App\\Entity\\ProductGroup" but no such service exists.'],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'product_group' => 'App\\Entity\\ProductGroup',
            'translator' => '?',
        ]);
    }
}

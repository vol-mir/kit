<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnitRepositoryService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Repository\UnitRepository' shared autowired service.
     *
     * @return \App\Repository\UnitRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\UnitRepository'] = new \App\Repository\UnitRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}

<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalculationRepositoryService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Repository\CalculationRepository' shared autowired service.
     *
     * @return \App\Repository\CalculationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CalculationRepository'] = new \App\Repository\CalculationRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}

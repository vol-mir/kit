<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnitTypeService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Form\UnitType' shared autowired service.
     *
     * @return \App\Form\UnitType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\UnitType'] = new \App\Form\UnitType();
    }
}

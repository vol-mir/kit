<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductTypeTypeService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Form\ProductTypeType' shared autowired service.
     *
     * @return \App\Form\ProductTypeType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ProductTypeType'] = new \App\Form\ProductTypeType();
    }
}

<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRenditionTypeService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Form\RenditionType' shared autowired service.
     *
     * @return \App\Form\RenditionType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\RenditionType'] = new \App\Form\RenditionType();
    }
}
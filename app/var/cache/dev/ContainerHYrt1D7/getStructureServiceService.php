<?php

namespace ContainerHYrt1D7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStructureServiceService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Services\StructureService' shared autowired service.
     *
     * @return \App\Services\StructureService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Services\\StructureService'] = new \App\Services\StructureService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}

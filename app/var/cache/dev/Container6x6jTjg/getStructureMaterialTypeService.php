<?php

namespace Container6x6jTjg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStructureMaterialTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\StructureMaterialType' shared autowired service.
     *
     * @return \App\Form\StructureMaterialType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/StructureMaterialType.php';

        return $container->privates['App\\Form\\StructureMaterialType'] = new \App\Form\StructureMaterialType(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}

<?php

namespace Container6x6jTjg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStructureDocumentTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\StructureDocumentType' shared autowired service.
     *
     * @return \App\Form\StructureDocumentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/StructureDocumentType.php';

        return $container->privates['App\\Form\\StructureDocumentType'] = new \App\Form\StructureDocumentType();
    }
}

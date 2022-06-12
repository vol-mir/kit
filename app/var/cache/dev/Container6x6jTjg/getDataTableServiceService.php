<?php

namespace Container6x6jTjg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataTableServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\DataTableService' shared autowired service.
     *
     * @return \App\Services\DataTableService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/DataTableService.php';

        return $container->privates['App\\Services\\DataTableService'] = new \App\Services\DataTableService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}

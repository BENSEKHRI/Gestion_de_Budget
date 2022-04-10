<?php

namespace ContainerBsCC6CO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bs1IPwpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Bs1IPwp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Bs1IPwp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'moisRep' => ['privates', 'App\\Repository\\MoisRepository', 'getMoisRepositoryService', true],
            'users' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'entityManager' => '?',
            'moisRep' => 'App\\Repository\\MoisRepository',
            'users' => 'App\\Repository\\UserRepository',
        ]);
    }
}

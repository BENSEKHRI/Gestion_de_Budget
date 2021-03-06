<?php

namespace ContainerUhESb6M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFaitControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\FaitController' shared autowired service.
     *
     * @return \App\Controller\FaitController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\FaitController'] = $instance = new \App\Controller\FaitController(($container->privates['App\\Repository\\FaitRepository'] ?? $container->load('getFaitRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\FaitController', $container));

        return $instance;
    }
}

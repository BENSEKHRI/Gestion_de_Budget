<?php

namespace ContainerBsCC6CO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFaitControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FaitController' shared autowired service.
     *
     * @return \App\Controller\FaitController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FaitController.php';

        $container->services['App\\Controller\\FaitController'] = $instance = new \App\Controller\FaitController(($container->privates['App\\Repository\\FaitRepository'] ?? $container->load('getFaitRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\FaitController', $container));

        return $instance;
    }
}
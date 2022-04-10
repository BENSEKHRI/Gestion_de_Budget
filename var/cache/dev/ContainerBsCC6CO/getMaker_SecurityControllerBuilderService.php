<?php

namespace ContainerBsCC6CO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_SecurityControllerBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.security_controller_builder' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Security\SecurityControllerBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/SecurityControllerBuilder.php';

        return $container->privates['maker.security_controller_builder'] = new \Symfony\Bundle\MakerBundle\Security\SecurityControllerBuilder(($container->privates['maker.php_compat_util'] ?? $container->load('getMaker_PhpCompatUtilService')));
    }
}

<?php

namespace ContainerZx4Xwox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_TemplateComponentGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.template_component_generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Util\TemplateComponentGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/TemplateComponentGenerator.php';

        return $container->privates['maker.template_component_generator'] = new \Symfony\Bundle\MakerBundle\Util\TemplateComponentGenerator(($container->privates['maker.php_compat_util'] ?? $container->load('getMaker_PhpCompatUtilService')));
    }
}

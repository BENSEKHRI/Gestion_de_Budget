<?php

namespace ContainerBsCC6CO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFaitSearchTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\FaitSearchType' shared autowired service.
     *
     * @return \App\Form\FaitSearchType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/FaitSearchType.php';

        return $container->privates['App\\Form\\FaitSearchType'] = new \App\Form\FaitSearchType();
    }
}

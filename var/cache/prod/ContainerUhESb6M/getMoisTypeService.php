<?php

namespace ContainerUhESb6M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMoisTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\MoisType' shared autowired service.
     *
     * @return \App\Form\MoisType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\MoisType'] = new \App\Form\MoisType();
    }
}

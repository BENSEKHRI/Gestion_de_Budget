<?php

namespace ContainerUhESb6M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompteTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CompteType' shared autowired service.
     *
     * @return \App\Form\CompteType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CompteType'] = new \App\Form\CompteType();
    }
}

<?php

namespace ContainerUhESb6M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFaitSearchTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\FaitSearchType' shared autowired service.
     *
     * @return \App\Form\FaitSearchType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\FaitSearchType'] = new \App\Form\FaitSearchType();
    }
}

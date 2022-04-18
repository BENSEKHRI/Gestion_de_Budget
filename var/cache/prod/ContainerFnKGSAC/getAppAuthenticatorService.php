<?php

namespace ContainerFnKGSAC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\AppAuthenticator' shared autowired service.
     *
     * @return \App\Security\AppAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\AppAuthenticator'] = new \App\Security\AppAuthenticator(($container->services['router'] ?? $container->getRouterService()));
    }
}

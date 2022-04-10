<?php

namespace ContainerNgyvKLs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPsysh_Command_ShellCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'psysh.command.shell_command' shared service.
     *
     * @return \Fidry\PsyshBundle\Command\PsyshCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/psysh-bundle/src/Command/PsyshCommand.php';

        $container->services['psysh.command.shell_command'] = $instance = new \Fidry\PsyshBundle\Command\PsyshCommand(($container->privates['psysh.shell'] ?? $container->load('getPsysh_ShellService')));

        $instance->setName('psysh');

        return $instance;
    }
}

<?php

namespace ContainerZx4Xwox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_message' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';

        $container->privates['maker.auto_command.make_message'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(($container->privates['maker.maker.make_message'] ?? $container->load('getMaker_Maker_MakeMessageService')), ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')));

        $instance->setName('make:message');
        $instance->setDescription('Creates a new message and handler');

        return $instance;
    }
}

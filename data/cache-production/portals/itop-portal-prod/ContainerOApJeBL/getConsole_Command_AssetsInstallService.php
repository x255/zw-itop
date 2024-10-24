<?php

namespace ContainerOApJeBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_AssetsInstallService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/lib/symfony/framework-bundle/Command/AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 5).'/lib/symfony/filesystem/Filesystem.php';

        $container->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), (\dirname(__DIR__, 5).'/env-production/itop-portal-base/portal'));

        $instance->setName('assets:install');
        $instance->setDescription('Install bundle\'s web assets under a public directory');

        return $instance;
    }
}
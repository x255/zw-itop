<?php

namespace ContainerOApJeBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecrets_VaultService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the private 'secrets.vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 5).'/lib/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 5).'/lib/symfony/string/LazyString.php';

        return $container->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 5).'/env-production/itop-portal-base/portal/config/secrets/'.$container->getEnv('string:default:kernel.environment:APP_RUNTIME_ENV')), \Symfony\Component\String\LazyString::fromCallable(\Closure::fromCallable([0 => $container, 1 => 'getEnv']), 'base64:default::SYMFONY_DECRYPTION_SECRET'));
    }
}

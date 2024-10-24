<?php

namespace ContainerOApJeBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TBfjr9hService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.tBfjr9h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tBfjr9h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'oBricksCollection' => ['services', 'brick_collection', 'getBrickCollectionService', true],
        ], [
            'oBricksCollection' => '?',
        ]);
    }
}
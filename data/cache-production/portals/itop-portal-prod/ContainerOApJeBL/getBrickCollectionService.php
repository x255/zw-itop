<?php

namespace ContainerOApJeBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBrickCollectionService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the public 'brick_collection' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\Brick\BrickCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/env-production/itop-portal-base/portal/src/Brick/BrickCollection.php';

        return $container->services['brick_collection'] = new \Combodo\iTop\Portal\Brick\BrickCollection(($container->services['ModuleDesign'] ?? ($container->services['ModuleDesign'] = new \ModuleDesign($container->getEnv('string:PORTAL_ID')))));
    }
}

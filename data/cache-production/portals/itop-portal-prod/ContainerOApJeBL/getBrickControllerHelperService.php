<?php

namespace ContainerOApJeBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBrickControllerHelperService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the public 'brick_controller_helper' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\Helper\BrickControllerHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/env-production/itop-portal-base/portal/src/Helper/BrickControllerHelper.php';

        return $container->services['brick_controller_helper'] = new \Combodo\iTop\Portal\Helper\BrickControllerHelper(($container->services['request_manipulator'] ?? $container->load('getRequestManipulatorService')));
    }
}

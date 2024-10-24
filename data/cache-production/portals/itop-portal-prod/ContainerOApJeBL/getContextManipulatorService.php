<?php

namespace ContainerOApJeBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContextManipulatorService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the public 'context_manipulator' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\Helper\ContextManipulatorHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/env-production/itop-portal-base/portal/src/Helper/ContextManipulatorHelper.php';

        return $container->services['context_manipulator'] = new \Combodo\iTop\Portal\Helper\ContextManipulatorHelper(($container->services['ModuleDesign'] ?? ($container->services['ModuleDesign'] = new \ModuleDesign($container->getEnv('string:PORTAL_ID')))), ($container->services['url_generator'] ?? $container->getUrlGeneratorService()), ($container->services['brick_collection'] ?? $container->load('getBrickCollectionService')), ($container->services['scope_validator'] ?? $container->load('getScopeValidatorService')));
    }
}

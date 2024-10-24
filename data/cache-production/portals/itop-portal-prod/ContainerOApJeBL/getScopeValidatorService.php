<?php

namespace ContainerOApJeBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScopeValidatorService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the public 'scope_validator' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\Helper\ScopeValidatorHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/env-production/itop-portal-base/portal/src/Helper/ScopeValidatorHelper.php';

        return $container->services['scope_validator'] = new \Combodo\iTop\Portal\Helper\ScopeValidatorHelper(($container->services['ModuleDesign'] ?? ($container->services['ModuleDesign'] = new \ModuleDesign($container->getEnv('string:PORTAL_ID')))), $container->getEnv('string:PORTAL_ID'), ($container->targetDir.''.'/'));
    }
}

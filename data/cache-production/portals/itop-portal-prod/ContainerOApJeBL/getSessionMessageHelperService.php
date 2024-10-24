<?php

namespace ContainerOApJeBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSessionMessageHelperService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the public 'session_message_helper' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\Helper\SessionMessageHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/env-production/itop-portal-base/portal/src/Helper/SessionMessageHelper.php';

        return $container->services['session_message_helper'] = new \Combodo\iTop\Portal\Helper\SessionMessageHelper($container);
    }
}

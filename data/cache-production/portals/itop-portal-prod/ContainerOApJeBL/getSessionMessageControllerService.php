<?php

namespace ContainerOApJeBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSessionMessageControllerService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the public 'Combodo\iTop\Portal\Controller\SessionMessageController' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\Controller\SessionMessageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 5).'/env-production/itop-portal-base/portal/src/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 5).'/env-production/itop-portal-base/portal/src/Controller/SessionMessageController.php';

        $container->services['Combodo\\iTop\\Portal\\Controller\\SessionMessageController'] = $instance = new \Combodo\iTop\Portal\Controller\SessionMessageController();

        $instance->setContainer(($container->privates['.service_locator.h0IrwYy'] ?? $container->load('get_ServiceLocator_H0IrwYyService'))->withContext('Combodo\\iTop\\Portal\\Controller\\SessionMessageController', $container));

        return $instance;
    }
}

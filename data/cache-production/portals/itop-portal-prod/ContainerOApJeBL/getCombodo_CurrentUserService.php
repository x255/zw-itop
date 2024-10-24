<?php

namespace ContainerOApJeBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCombodo_CurrentUserService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the public 'combodo.current_user' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\Twig\CurrentUserAccessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/env-production/itop-portal-base/portal/src/Twig/CurrentUserAccessor.php';

        return $container->services['combodo.current_user'] = new \Combodo\iTop\Portal\Twig\CurrentUserAccessor(($container->privates['Combodo\\iTop\\Portal\\EventListener\\UserProvider'] ?? $container->getUserProviderService()));
    }
}

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOApJeBL\Combodo_iTop_Portal_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOApJeBL/Combodo_iTop_Portal_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerOApJeBL.legacy');

    return;
}

if (!\class_exists(Combodo_iTop_Portal_KernelProdContainer::class, false)) {
    \class_alias(\ContainerOApJeBL\Combodo_iTop_Portal_KernelProdContainer::class, Combodo_iTop_Portal_KernelProdContainer::class, false);
}

return new \ContainerOApJeBL\Combodo_iTop_Portal_KernelProdContainer([
    'container.build_hash' => 'OApJeBL',
    'container.build_id' => '6431995d',
    'container.build_time' => 1729671582,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOApJeBL');

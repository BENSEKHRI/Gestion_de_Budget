<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFnKGSAC\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFnKGSAC/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerFnKGSAC.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerFnKGSAC\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerFnKGSAC\App_KernelProdContainer([
    'container.build_hash' => 'FnKGSAC',
    'container.build_id' => 'd861714b',
    'container.build_time' => 1650293396,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFnKGSAC');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBiKq8i3\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBiKq8i3/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBiKq8i3.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBiKq8i3\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBiKq8i3\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BiKq8i3',
    'container.build_id' => '52108c1c',
    'container.build_time' => 1640415591,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBiKq8i3');
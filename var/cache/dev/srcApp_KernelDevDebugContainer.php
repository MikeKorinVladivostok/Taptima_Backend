<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSyUzrKu\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSyUzrKu/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSyUzrKu.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSyUzrKu\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSyUzrKu\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'SyUzrKu',
    'container.build_id' => 'a551f22d',
    'container.build_time' => 1640237752,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSyUzrKu');

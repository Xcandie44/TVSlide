<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNC49LGs\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNC49LGs/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNC49LGs.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNC49LGs\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNC49LGs\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'NC49LGs',
    'container.build_id' => 'eed5e119',
    'container.build_time' => 1555307514,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerNC49LGs');

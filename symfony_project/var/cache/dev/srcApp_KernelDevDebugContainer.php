<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEgL52sq\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEgL52sq/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEgL52sq.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEgL52sq\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerEgL52sq\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'EgL52sq',
    'container.build_id' => '7a220a1f',
    'container.build_time' => 1554903618,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEgL52sq');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJk7xv9M\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJk7xv9M/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJk7xv9M.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJk7xv9M\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJk7xv9M\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Jk7xv9M',
    'container.build_id' => 'a76f05ad',
    'container.build_time' => 1559051368,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJk7xv9M');

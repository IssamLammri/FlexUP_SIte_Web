<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZhCqy7G\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZhCqy7G/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZhCqy7G.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZhCqy7G\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZhCqy7G\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ZhCqy7G',
    'container.build_id' => '11078e6d',
    'container.build_time' => 1558949693,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZhCqy7G');

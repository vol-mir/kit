<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHYrt1D7\App_KernelDevContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHYrt1D7/App_KernelDevContainer.php') {
    touch(__DIR__.'/ContainerHYrt1D7.legacy');

    return;
}

if (!\class_exists(App_KernelDevContainer::class, false)) {
    \class_alias(\ContainerHYrt1D7\App_KernelDevContainer::class, App_KernelDevContainer::class, false);
}

return new \ContainerHYrt1D7\App_KernelDevContainer([
    'container.build_hash' => 'HYrt1D7',
    'container.build_id' => 'da548be7',
    'container.build_time' => 1655021779,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHYrt1D7');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6JdEpLR\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6JdEpLR/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container6JdEpLR.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container6JdEpLR\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container6JdEpLR\App_KernelProdContainer([
    'container.build_hash' => '6JdEpLR',
    'container.build_id' => '6a5c2dc0',
    'container.build_time' => 1606408676,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6JdEpLR');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6FWbUVR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6FWbUVR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6FWbUVR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6FWbUVR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6FWbUVR\App_KernelDevDebugContainer([
    'container.build_hash' => '6FWbUVR',
    'container.build_id' => '6fc64090',
    'container.build_time' => 1596901354,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6FWbUVR');

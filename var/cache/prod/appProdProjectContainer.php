<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2cofumq\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2cofumq/appProdProjectContainer.php') {
    touch(__DIR__.'/Container2cofumq.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container2cofumq\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container2cofumq\appProdProjectContainer(array(
    'container.build_hash' => '2cofumq',
    'container.build_id' => 'b7a12612',
    'container.build_time' => 1536758513,
), __DIR__.\DIRECTORY_SEPARATOR.'Container2cofumq');

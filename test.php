<?php

use Rabus\Symfony32395Reproducer\TestClass;
use Symfony\Component\Config\Resource\ClassExistenceResource;

require __DIR__.'/vendor/autoload.php';

$resource = new ClassExistenceResource(TestClass::class);

try {
    $resource->isFresh(0);
} catch (Throwable $e) {
    printf('Caught %s!', get_class($e));
}
echo "\n";

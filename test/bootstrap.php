<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
    echo 'You must set up the project dependencies, run the following commands:' . PHP_EOL .
         'curl -sS https://getcomposer.org/installer | php' . PHP_EOL .
         'php composer.phar install' . PHP_EOL;
    exit(1);
}

include __DIR__ . '/../vendor/autoload.php';

AnnotationRegistry::registerLoader('class_exists');

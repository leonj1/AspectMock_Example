<?php

require __DIR__ . '/../composer/vendor/autoload.php';

$kernel = \AspectMock\Kernel::getInstance();
$kernel->init([
    'debug' => true,
    'cacheDir'  => '/tmp/foo',
    'includePaths' => ['../src'],
    'excludePaths' => ['../test'] // tests dir should be excluded
]);
$kernel->loadFile(__DIR__.'/../src/app_autoload.php');

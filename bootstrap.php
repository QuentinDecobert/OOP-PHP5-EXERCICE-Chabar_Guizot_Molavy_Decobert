<?php

require_once __DIR__.'/vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [
    __DIR__.'/src/Entity',
];
$isDevMode = true;

// the connection configuration
$dbParams = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__.'/config/parameters.yml'))['database'];
$config   = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

return EntityManager::create($dbParams, $config);
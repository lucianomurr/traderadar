<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

//set default timezone
date_default_timezone_set("Europe/Rome");

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;

// Database structure ===> yaml
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host' => '127.0.0.1',
    'user'     => 'doctrinedb',
    'password' => '1234',
    'dbname'   => 'doctrine',
);

// obtaining the entity manager
$entityManager = EntityManager::create($dbParams, $config);
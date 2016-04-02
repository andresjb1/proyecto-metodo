<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(\proyecto\Config\Constantes::APP_PATH);
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'mysqli',
    'user'     => 'sistema_prestamos',
    'password' => 'sistema_prestamos',
    'dbname'   => 'sistema_prestamos',
);

$dbconfig = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $dbconfig);
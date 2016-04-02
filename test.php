<?php
/**
 * Created by PhpStorm.
 * User: Andrés
 * Date: 01/04/2016
 * Time: 20:16
 */
include "vendor/autoload.php";
include "config/db.php";

$nombre = $_GET['nombre'];

// guardar
//$dispositivo = new \proyecto\Entidades\Dispositivo($nombre);
//$entityManager->persist($dispositivo);
//$entityManager->flush();

//$dispositivo = $entityManager->find(\proyecto\Entidades\Dispositivo::class, 1);
//echo "el nombre es: " . $dispositivo->getNombre();


//$dispositivo = $entityManager->getRepository(\proyecto\Entidades\Dispositivo::class)->findOneByNombre('control');
//echo "el id es: " . $dispositivo->getId();

//$dispositivo = $entityManager->find(\proyecto\Entidades\Dispositivo::class, 1);
//$dispositivo->setNombre($nombre);
//$entityManager->flush();

//$dispositivo = $entityManager->find(\proyecto\Entidades\Dispositivo::class, 1);
//$entityManager->remove($dispositivo);

//$total = count($entityManager->getRepository(\proyecto\Entidades\Dispositivo::class)->findAll());
//echo "hay un total de {$total} de dispositivos";

//$rol = $entityManager->find(\proyecto\Entidades\Rol::class, \proyecto\Entidades\Rol::ADMIN);
//$user = new \proyecto\Entidades\Usuario('admin', 'admin@proyecto', 'admin', 'appes', '123', $rol);
//$entityManager->persist($user);
//$entityManager->flush();

//$rol = $entityManager->find(\proyecto\Entidades\Rol::class, \proyecto\Entidades\Rol::ESTUDIANTE);
//$$ser = new \proyecto\Entidades\Usuario('estudiante', 'estudiante@proyecto', 'estud', 'hasda', '345', $rol);
//$entityManager->persist($user);
//$entityManager->flush();

$rol = $entityManager->find(\proyecto\Entidades\Rol::class, \proyecto\Entidades\Rol::PROFESOR);
$user = new \proyecto\Entidades\Usuario('profesor', 'profesor@proyecto', 'prof', 'qweq', '789', $rol);
$entityManager->persist($user);
$entityManager->flush();
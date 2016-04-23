<?php

include "../../../vendor/autoload.php";
include "../../../config/db.php";

$nombre = $_POST['nombre'];

$dispositivo = $entityManager->find(\proyecto\Entidades\Dispositivo::class, $_GET['id']);
$dispositivo->setNombre($nombre);
$entityManager->merge($dispositivo); // combinar los cambios
$entityManager->flush();
header('Location: listaDispositivo.php');
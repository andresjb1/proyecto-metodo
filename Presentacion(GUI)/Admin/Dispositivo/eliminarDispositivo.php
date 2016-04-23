<?php

include "../../../vendor/autoload.php";
include "../../../config/db.php";




$dispositivo = $entityManager->find(\proyecto\Entidades\Dispositivo::class, $_GET['id']);

$entityManager->remove($dispositivo); // combinar los cambios
$entityManager->flush();
header('Location: listaDispositivo.php');

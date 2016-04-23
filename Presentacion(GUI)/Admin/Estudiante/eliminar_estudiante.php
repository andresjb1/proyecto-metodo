<?php

include "../../../vendor/autoload.php";
include "../../../config/db.php";




$estudiante = $entityManager->find(\proyecto\Entidades\Usuario::class, $_GET['id']);

$entityManager->remove($estudiante); // combinar los cambios
$entityManager->flush();
header('Location: listaEstudiante.php');

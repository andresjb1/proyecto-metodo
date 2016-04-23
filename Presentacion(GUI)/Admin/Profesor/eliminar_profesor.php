<?php

include "../../../vendor/autoload.php";
include "../../../config/db.php";




$profesor = $entityManager->find(\proyecto\Entidades\Usuario::class, $_GET['id']);

$entityManager->remove($profesor); // combinar los cambios
$entityManager->flush();
header('Location: listaProfesor.php');
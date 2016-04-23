<?php

include "../../../vendor/autoload.php";
include "../../../config/db.php";


$correo=$_POST['correo'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];


$estudiante = $entityManager->find(\proyecto\Entidades\Usuario::class, $_GET['id']);
$estudiante->setCorreo($correo);
$estudiante->setNombre($nombre);
$estudiante->setApellidos($apellidos);
$estudiante->setTelefono($telefono);

$entityManager->merge($estudiante); // combinar los cambios
$entityManager->flush();
header('Location: listaEstudiante.php');

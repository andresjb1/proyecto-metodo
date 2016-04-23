<?php

include "../../../vendor/autoload.php";
include "../../../config/db.php";


$correo=$_POST['correo'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];


$profesor = $entityManager->find(\proyecto\Entidades\Usuario::class, $_GET['id']);
$profesor->setCorreo($correo);
$profesor->setNombre($nombre);
$profesor->setApellidos($apellidos);
$profesor->setTelefono($telefono);

$entityManager->merge($profesor); // combinar los cambios
$entityManager->flush();
header('Location: listaProfesor.php');

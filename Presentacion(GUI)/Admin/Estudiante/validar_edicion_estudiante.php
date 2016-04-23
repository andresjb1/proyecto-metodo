<?php

include "../../../vendor/autoload.php";
include "../../../config/db.php";


$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];

$rol = $entityManager->find(\proyecto\Entidades\Rol::class, \proyecto\Entidades\Rol::ESTUDIANTE);


$estudiante = $entityManager->find(\proyecto\Entidades\Usuario::class, $_GET['id']);
$estudiante->setCorreo($correo);
$estudiante->setContraseña($contraseña);
$estudiante->setNombre($nombre);
$estudiante->setApellido($apellido);
$estudiante->setTelefono($telefono);

$entityManager->merge($estudiante); // combinar los cambios
$entityManager->flush();
header('Location: listaEstudiante.php');

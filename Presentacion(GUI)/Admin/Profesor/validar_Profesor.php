<?php

include "../../../vendor/autoload.php";
include "../../../config/db.php";

$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];

$rol = $entityManager->find(\proyecto\Entidades\Rol::class, \proyecto\Entidades\Rol::ESTUDIANTE);

$user = new \proyecto\Entidades\Usuario($contraseña,$correo,$nombre,$apellidos,$telefono, $rol);
$entityManager->persist($user);
$entityManager->flush();
header('Location: listaEstudiante.php');
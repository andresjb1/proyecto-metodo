<?php

include "../../../vendor/autoload.php";
include "../../../config/db.php";

$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];

$qb = $entityManager->createQueryBuilder();
$qb->select('h');
$qb->from(\proyecto\Entidades\Horario::class, 'h');
$qb->where($qb->expr()->in('h.id',$idsHorarios ));
$horarios = $qb->getQuery()->getResult();

$user = new \proyecto\Entidades\Usuario($correo,$contraseña,$nombre,$apellido,$telefono, $rol);
$entityManager->persist($user);
$entityManager->flush();
header('Location: lista.php');
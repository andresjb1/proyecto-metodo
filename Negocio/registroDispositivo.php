
<?php

include "../vendor/autoload.php";
include "../config/db.php";

if (empty($_POST['txtCodigo'])) {
    header('Location: ../Presentacion(GUI)/Admin/Dispositivos.php?error=1');
}
elseif (empty($_POST['txtNombre'])) {
    header('Location: ../Presentacion(GUI)/Admin/Dispositivo.php?error=2');
}
else {
    $Codigo = $_POST['txtCodigo'];
    $Nombre = $_POST['txtNombre'];

    $rol = $entityManager->find(\proyecto\Entidades\Rol::class, \proyecto\Entidades\Rol::PROFESOR);

    $user = new \proyecto\Entidades\Usuario($Codigo, $Nombre);
    $entityManager->persist($user);
    $entityManager->flush();
}

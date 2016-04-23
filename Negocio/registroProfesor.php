<?php
if (empty($_POST['txtCorreo'])) {
    header('Location: ../Presentacion(GUI)/Admin/Estudiante.php?error=1');
}
elseif (empty($_POST['txtContraseña'])) {
    header('Location: ../Presentacion(GUI)/Admin/Estudiante.php?error=2');
}
elseif (empty($_POST['txtNombre'])) {
    header('Location: ../Presentacion(GUI)/Admin/Estudiante.php?error=2');
}
elseif (empty($_POST['txtApellido'])) {
    header('Location: ../Presentacion(GUI)/Admin/Estudiante.php?error=2');
}
elseif (empty($_POST['txtTelefono'])) {
    header('Location: ../Presentacion(GUI)/Admin/Estudiante.php?error=2');
}
else {
    $correo = $_POST['txtCorreo'];
    $contraseña = $_POST['txtContraseña'];
    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    $telefono = $_POST['txtTelefono'];
    $rol = $entityManager->find(\proyecto\Entidades\Rol::class, \proyecto\Entidades\Rol::PROFESOR);

    $user = new \proyecto\Entidades\Usuario($correo,$contraseña,$nombre,$apellido, $rol);
    $entityManager->persist($user);
    $entityManager->flush();


}

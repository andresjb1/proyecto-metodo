<?php
use proyecto\Entidades\Usuario;

require_once "../vendor/autoload.php";
include \proyecto\Config\Constantes::APP_PATH . 'config/db.php';

if (empty($_POST['email'])) {
    echo "Por favor ingresar el correo electronico";
}
elseif (empty($_POST['password']))
{
    echo "Por favor ingresar la contrase&ntilde;a";
}
else
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $usuario = $entityManager->getRepository(Usuario::class)->findOneBy([
        'correo' => $email,
        'password' => $password
    ]);

    //En vez de la comparacion de user, 1234, se debe realizar una consulta a la BD
    if($usuario != null)
    {
        if ($usuario->getRol()->getId() == \proyecto\Entidades\Rol::ADMIN){

            SESSION_START();
            $_SESSION['s_user']=$email;
            $_SESSION['s_password']=$password;
            header('Location: ../Presentacion(GUI)/Admin/HomeAdm.php');

        }

        elseif($usuario->getRol()->getId() == \proyecto\Entidades\Rol::ESTUDIANTE)
        {
            SESSION_START();
            $_SESSION['s_user']=$email;
            $_SESSION['s_password']=$password;
            header('Location: ../Presentacion(GUI)/Home.php');
        }

        elseif($usuario->getRol()->getId() == \proyecto\Entidades\Rol::PROFESOR)
        {
            SESSION_START();
            $_SESSION['s_user']=$email;
            $_SESSION['s_password']=$password;
            header('Location: ../Presentacion(GUI)/Home.php');
        }
    }

    else
    {
        echo "Error: Correo o contraseña incorrectos";
    }

}
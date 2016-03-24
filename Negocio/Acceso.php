<?php
/**
 * Created by PhpStorm.
 * User: Emanuel
 * Date: 03/03/2016
 * Time: 9:52
 */
if (empty($_GET['email'])) {
    echo "Por favor ingresar el correo electronico";
}
elseif (empty($_GET['password']))
{
    echo "Por favor ingresar la contrase&ntilde;a";
}
else
{
    $email = $_GET['email'];
    $password = $_GET['password'];

    //En vez de la comparacion de user, 1234, se debe realizar una consulta a la BD
    if($email == "user" and $password == "1234")
    {
        SESSION_START();
        $_SESSION['s_user']=$email;
        $_SESSION['s_password']=$password;
        header('Location: ../Presentacion(GUI)/Home.php');
    }
    //En vez de la comparacion de admin, 1234, se debe realizar una consulta a la BD
    elseif($email == "admin" and $password == "1234")
    {
        SESSION_START();
        $_SESSION['s_user']=$email;
        $_SESSION['s_password']=$password;
        header('Location: ../Presentacion(GUI)/Admin/HomeAdm.php');
    }
    else
    {
        echo "Error: Correo o contraseña incorrectos";
    }

}


?>


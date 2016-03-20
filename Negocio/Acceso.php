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

    if($email == "admin" and $password == "1234")
    {
        header('Location: ../Presentacion(GUI)/Home.php');
    }
    else
    {
        echo "Error: Correo o contraseña incorrectos";
    }

}


?>


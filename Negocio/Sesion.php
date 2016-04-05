<?php

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

    //En vez de la comparacion de user, 1234, se debe realizar una consulta a la BD
    if($email == "user" and $password == "1234")
    {
        SESSION_START();
        $_SESSION['s_user']=$email;
        $_SESSION['s_password']=$password;
        echo 1;
        //header('Location: ../Presentacion(GUI)/Home.php');
    }
    //En vez de la comparacion de admin, 1234, se debe realizar una consulta a la BD
    elseif($email == "admin" and $password == "1234")
    {
        SESSION_START();
        $_SESSION['s_user']=$email;
        $_SESSION['s_password']=$password;
        echo 2;
        //header('Location: ../Presentacion(GUI)/Admin/HomeAdm.php');
    }
    else
    {
        echo "Correo o contraseña incorrectos";
    }

}


?>


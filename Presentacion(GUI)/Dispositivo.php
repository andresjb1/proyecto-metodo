<?php
SESSION_START();
$user=$_SESSION['s_user'];
$pass=$_SESSION['s_password'];
if($user == null OR $pass == null)
{
    header('Location: Login.php');
}
echo "usuario:$user</br>";
echo "Pass:$pass";
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Solicitudes</title>
    <link rel="shortcut icon" href="IMG/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="Styles/HSGeneral.css" />
    <link rel="stylesheet" href="Styles/Fonts.css"/>
    <link rel="stylesheet" href="Styles/Menu.css"/>
</head>

<body>
<header>
    <div class="menu_bar">

        <a href="#" class="bt-menu"><img id="logo_menu" src="IMG/logo-latina-2015.png"/>
            <span class="icon-list"></span>
        </a>
    </div>
    <nav>
        <ul>
            <img id="logo_menu_max" src="IMG/logo-latina-2015.png"/>
            <li><a href="#"><span class="icon-home"></span> Inicio</a></li>
            <li><a href="Dispositivo.php"><span class="icon-add-to-list"></span> Solicitar Dispositivo</a></li>
            <li><a href="#"><span class="icon-list"></span> Dispositivos Disponibles</a></li>
            <li><a href="../Negocio/Cierre.php"><span class="icon-tag"></span> Cerrar sesión</a></li>
        </ul>
    </nav>
</header>

</br></br>

<form class="formulario-1" runat="server">
    <div class="p-container">
    <h1>Solicitar Dispositivo</h1>
    <div class="NewClass">
        <p>
            <label class="label-1" for="NomDispositivo">Dispositivo</label>
            <input class="input-1" type="text" name="NomDispositivo" id="NomDispositivo"/>
        </p>
        <p>
            <label class="label-1" for="NumAula">Aula</label>
            <input class="input-1" type="text" name="NumAula" id="NumAula"/>
        </p>
    </div>
    <p class="p-container">

        <input class="input-1" type="submit" name="go" id="go" value="Solicitar Dispositivo"/>
    </p>
    </div>
</form>

</body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="JS/menuScript.js"></script>
</html>
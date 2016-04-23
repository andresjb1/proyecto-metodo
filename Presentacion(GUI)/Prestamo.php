<?php
SESSION_START();
$user=$_SESSION['s_user'];
$pass=$_SESSION['s_password'];
if($user == null OR $pass == null)
{
    header('Location: Login.php');
}
//echo "usuario:$user</br>";
//echo "Pass:$pass";
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Home</title>
    <link rel="shortcut icon" href="IMG/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="Styles/HSGeneral.css" />
    <link rel="stylesheet" href="Styles/Fonts.css"/>
    <link rel="stylesheet" href="Styles/Menu.css"/>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="CnxAdminPrestamos.js"></script>
</head>
<body>

<header>
    <div class="menu_bar">

        <a href="#" class="bt-menu"><img id="logo_menu" src="IMG/logo-latina-2015.png"/>
            <span class="icon-list"></span>
        </a>
    </div>
    <nav class="nav-1">
        <ul>
            <li class="li-1"><img id="logo_menu_max" src="IMG/logo-latina-2015.png"/></li>
            <li class="li-1"><a href="Home.php"><span class="icon-home"></span>Inicio</a></li>
            <li class="li-1"><a href="Prestamo.php"><span class="icon-add-to-list"></span>Prestamo</a></li>
            <li class="li-1"><a href="Perfil.php"><span class="icon-users"></span> Perfil</a></li>
            <li class="li-1"><a href="../Negocio/Cierre.php"><span class="icon-lock"></span> Cerrar sesión</a></li>
        </ul>
    </nav>
</header>

<div class="wrapper">
    </br>
    <h1 class="head-1">Prestamo de dispositivos</h1>
    <br/><br/>
    <form class="formulario-1" method="post">
        <h1>Solicitud</h1>
        <div class="p-container">
            <p>
                <label class="label-1" for="Codigo">Codigo</label>
                <input class="input-1" type="text" name="codigo" id="txtCodigo"/>
            </p>
            <p>
                <label class="label-1"for="nombreDispo">Nombre</label>
                <input class="input-1" type="text" name="nombreDispo" id="txtNombre"/>
            </p>

            <p>
                <input class="input-1" type="submit" value="Agregar" onclick="peticionPrestamo($('#txtCodigo').val(), $('#txtNombre').val());return false;"/>
            </p>
            <div class="respuestas">
                <label id="mensaje1" class="mensaje"></label>
                <label id="error1" class="error"></label>
            </div>
        </div>
    </form>
    </br>


</div>

</body>
<script src="JS/menuScript.js"></script>
</html>
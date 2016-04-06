<?php
SESSION_START();
$user=$_SESSION['s_user'];
$pass=$_SESSION['s_password'];
if($user == null OR $pass == null)
{
    header('Location: ../Login.php');
}
//echo "usuario:$user</br>";
// "Pass:$pass";
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Profesor</title>
    <link rel="shortcut icon" href="../IMG/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="../Styles/HSGeneral.css" />
    <link rel="stylesheet" href="../Styles/Fonts.css"/>
    <link rel="stylesheet" href="../Styles/Menu.css"/>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="CnxAdminProfesores.js"></script>
<body>
<header>
    <div class="menu_bar">

        <a href="#" class="bt-menu"><img id="logo_menu" src="../IMG/logo-latina-2015.png"/>
            <span class="icon-list"></span>
        </a>
    </div>
    <nav class="nav-1">
        <ul>
            <li class="li-1"><img id="logo_menu_max" src="../IMG/logo-latina-2015.png"/></li>
            <li class="li-1"><a href="HomeAdm.php"> Inicio</a></li>
            <li class="li-1"><a href="Dispositivos.php">Dispositivos</a></li>
            <li class="li-1"><a href="Estudiante.php">Estudiantes</a></li>
            <li class="li-1"><a href="Profesor.php">Profesores</a></li>
            <li class="li-1"><a href="Aula.php">Aulas</a></li>
            <li class="li-1"><a href="../../Negocio/Cierre.php"></span>Sesión</a></li>
        </ul>
    </nav>
</header>


</br>
<div class="wrapper">
    <h1 class="head-1">Profesores</h1>

    <form class="formulario-2" method="post">
        <input class="input-2" type="text" name="txtBxNAula" id="txtbCarnet"/>
        <input class="input-1" type="submit" value="Busqueda por carnet" onclick="peticionProfesor($('#txtCarnet').val(), $('#txtNombre').val(), $('#txtApellido').val(), $('#txtbCarnet').val(), 5);return false;"/>
        <div class="respuestas">
            <label id="mensaje2" class="mensaje2"></label>
            <label id="error2" class="error"></label>
        </div>
    </form>

    </br></br>
    <form class="formulario-1">
        <h1>Datos</h1>
        <div class="p-container">
            <p>
                <label class="label-1" for="NumCarnet">Carnet</label>
                <input class="input-1" type="text" name="txtCarnet" id="txtCarnet"/>
            </p>
            <p>
                <label class="label-1" for="NomEstudiante">Nombre</label>
                <input class="input-1" type="text" name="txtNombre" id="txtNombre"/>
            </p>
            <p>
                <label class="label-1" for="apellido">Apellido</label>
                <input class="input-1" type="text" name="txtApellido" id="txtApellido"/>
            </p>
            <div class="respuestas">
                <label id="mensaje1" class="mensaje"></label>
                <label id="error1" class="error"></label>
            </div>
        </div>
    </form>
    </br>
    <div class="container-center-A">
        <input class="input-1" type="submit" value="Agregar" onclick="peticionProfesor($('#txtCarnet').val(), $('#txtNombre').val(), $('#txtApellido').val(), $('#txtbCarnet').val(), 1);return false;"/>
        <input class="input-1" type="submit" value="Buscar" onclick="peticionProfesor($('#txtCarnet').val(), $('#txtNombre').val(), $('#txtApellido').val(), $('#txtbCarnet').val(), 2);return false;"/>
        <input class="input-1" type="submit" value="Editar" onclick="peticionProfesor($('#txtCarnet').val(), $('#txtNombre').val(), $('#txtApellido').val(), $('#txtbCarnet').val(), 3);return false;"/>
        <input class="input-1" type="submit" value="Eliminar" onclick="peticionProfesor($('#txtCarnet').val(), $('#txtNombre').val(), $('#txtApellido').val(), $('#txtbCarnet').val(), 4);return false;"/>
    </div>
    </br>
</div>
</body>
<script src="../JS/menuScript.js"></script>
</html>
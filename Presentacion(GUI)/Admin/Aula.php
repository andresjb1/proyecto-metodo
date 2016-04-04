<?php
SESSION_START();
$user=$_SESSION['s_user'];
$pass=$_SESSION['s_password'];
if($user == null OR $pass == null)
{
    header('Location: ../Login.php');
}
//echo "usuario:$user</br>";
//echo "Pass:$pass";
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Cursos</title>
    <link rel="shortcut icon" href="../IMG/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="../Styles/HSGeneral.css" />
    <link rel="stylesheet" href="../Styles/Fonts.css"/>
    <link rel="stylesheet" href="../Styles/Menu.css"/>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
</head>


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
    <h1 class="head-1">Aulas</h1>
    <form class="formulario-2">
        <input class="input-2" type="text" name="NumAula" id="NumAula"/>
        <input class="input-1" type="submit" name="go" id="go" value="Busqueda por número"/>
    </form>

    <br/><br/>
    <form class="formulario-1">
        <h1>Datos</h1>
        <div class="p-container">
            <p>
                <label class="label-1" for="NumAula">Numero Aula</label>
                <input class="input-1" type="text" name="NumAula" id="NumAula"/>
            </p>
            <p>
                <label class="label-1" for="edificio">Edificio</label>
                <input class="input-1" type="text" name="edificio" id="edificio"/>
            </p>
            <p>
                <label class="label-1" for="Capacidad">Capacidad</label>
                <input class="input-1" type="text" name="capacidad" id="capacidad"/>
            </p>
        </div>
    </form>
    </br>
    <div class="container-center-A">
        <input class="input-1" type="submit" name="go" id="go" value="Agregar"/>
        <input class="input-1" type="submit" name="go" id="go" value="Editar"   />
        <input class="input-1" type="submit" name="go" id="go" value="Eliminar"/>
    </div>
</div>
</body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../JS/menuScript.js"></script>
</html>


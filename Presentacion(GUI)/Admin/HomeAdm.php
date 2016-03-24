<?php
    SESSION_START();
    $user=$_SESSION['s_user'];
    $pass=$_SESSION['s_password'];
    if($user == null OR $pass == null)
    {
        header('Location: ../Login.php');
    }
    echo "usuario:$user</br>";
    echo "Pass:$pass";
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Home</title>
    <link rel="shortcut icon" href="../IMG/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="../Styles/HSGeneral.css" />
    <link rel="stylesheet" href="../Styles/Fonts.css"/>
    <link rel="stylesheet" href="../Styles/Menu.css"/>
</head>
<body>

<header>
    <div class="menu_bar">

        <a href="#" class="bt-menu"><img id="logo_menu" src="../IMG/logo-latina-2015.png"/>
            <span class="icon-list"></span>
        </a>
    </div>
    <nav>
        <ul>
            <img id="logo_menu_max" src="../IMG/logo-latina-2015.png"/>
            <li><a href="#"><span class="icon-home"></span> Inicio</a></li>
            <li><a href="Mantenimiento.php"><span class="icon-tools"></span> Mantenimiento Dispositivos</a></li>
            <li><a href="Estudiante.php"><span class="icon-add-user"></span> Estudiantes</a></li>
            <li><a href="Profesor.php"><span class="icon-add-user"></span> Profesores</a></li>
            <li><a href="Aula.php"><span class="icon-add-to-list"></span> Aulas</a></li>
            <li><a href="../../Negocio/Cierre.php"><span class="icon-tag"></span> Cerrar sesión</a></li>
        </ul>
    </nav>
</header>
<section>

</section>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../JS/menuScript.js"></script>
</body>
</html>



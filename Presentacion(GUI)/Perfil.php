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
    <h1 class="head-1">Perfil</h1>
    <form runat="server">
        <div class="p-container">
            <div class="NewClass">
                <p>
                    <label class="label-3" for="NomDispositivo">Carnet:</label>
                </p>
                <p>
                    <label class="label-3" for="NumAula">Nombre:</label>
                </p>
                <p>
                    <label class="label-3" for="NumAula">Sede:</label>
                </p>
                <p>
                    <label class="label-3" for="NumAula">Teléfono:</label>
                </p>
                <p>
                    <label class="label-3" for="NumAula">Email:</label>
                </p>
            </div>
        </div>
    </form>
</div>

</body>
<script src="JS/menuScript.js"></script>
</html
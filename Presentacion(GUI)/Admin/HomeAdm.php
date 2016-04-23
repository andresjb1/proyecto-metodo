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
    <title>Home</title>
    <link rel="shortcut icon" href="../IMG/favicon.png"/>
    <link rel="stylesheet" href="../Styles/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../Styles/bootstrap/fonts/" />
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
    <nav class="nav-1">
        <ul>
            <li class="li-1"><img id="logo_menu_max" src="../IMG/logo-latina-2015.png"/></li>
            <li class="li-1"><a  href="HomeAdm.php"> Inicio</a></li>
            <li class="li-1"><a  href="Dispositivos.php">Dispositivos</a></li>
            <li class="li-1"><a  href="Estudiante.php">Estudiantes</a></li>
            <li class="li-1"><a  href="Profesor.php">Profesores</a></li>
            <li class="li-1"><a  href="Aula.php">Aulas</a></li>
            <li class="li-1"><a  href="../../Negocio/Cierre.php"></span>Sesión</a></li>
        </ul>
    </nav>
</header>
<div class="wrapper">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="#" target="blank">
                    <img src="../IMG/banner/21.png" alt="Ulatina-publicidad-1">
                </a>
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <a href="#" target="blank">
                    <img src="../IMG/banner/23.png" alt="Ulatina-publicidad-2">
                </a>
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <a href="#" target="blank">
                    <img src="../IMG/banner/24.png" alt="Ulatina-publicidad-3">
                </a>
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <a href="http://www.ulatina.ac.cr/oferta-academica/ejecutivas" target="blank">
                    <img src="../IMG/banner/7.png" alt="Ulatina-publicidad-4">
                </a>
                <div class="carousel-caption">
                    ...
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../Styles/bootstrap/js/bootstrap.min.js"></script>
<script src="../JS/menuScript.js"></script>
</html>





<?php
SESSION_START();
$user=$_SESSION['s_user'];
$pass=$_SESSION['s_password'];
if($user == null OR $pass == null) {
    header('Location: Login.php');
}

include "../../../vendor/autoload.php";
include "../../../config/db.php";

$profesor = $entityManager->find(\proyecto\Entidades\Usuario::class, $_GET['id']);

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Aulas</title>
    <link rel="shortcut icon" href="../../IMG/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="../../Styles/HSGeneral.css" />
    <link rel="stylesheet" href="../../Styles/Fonts.css"/>
    <link rel="stylesheet" href="../../Styles/Menu.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

    <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>

</head>


<body>
<header>
    <div class="menu_bar">

        <a href="#" class="bt-menu"><img id="logo_menu" src="../../IMG/logo-latina-2015.png"/>
            <span class="icon-list"></span>
        </a>
    </div>
    <nav class="nav-1">
        <ul>
            <li class="li-1"><img id="logo_menu_max" src="../../IMG/logo-latina-2015.png"/></li>
            <li class="li-1"><a href="HomeAdm.php"> Inicio</a></li>
            <li class="li-1"><a href="Dispositivos.php">Dispositivos</a></li>
            <li class="li-1"><a href="listaEstudiante.php">Estudiantes</a></li>
            <li class="li-1"><a href="Profesor.php">Profesores</a></li>
            <li class="li-1"><a href="../aulas/lista.php">Aulas</a></li>
            <li class="li-1"><a href="../../Negocio/Cierre.php"></span>Sesión</a></li>
        </ul>
    </nav>
</header>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Editar profesor #<?php echo $profesor->getNombre()?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="post" action="validar_edicion_profesor.php?id=<?php echo $profesor->getId()?>">
                <div class="form-group">
                    <label class="col-md-offset-2 col-md-2">Correo</label>
                    <div class="col-md-5">
                        <input type="text" name="correo" class="form-control" value="<?php echo $profesor->getCorreo()?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-offset-2 col-md-2">Nombre</label>
                    <div class="col-md-5">
                        <input type="text" name="nombre" class="form-control" value="<?php echo $profesor->getNombre()?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-offset-2 col-md-2">Apellidos</label>
                    <div class="col-md-5">
                        <input type="text" name="apellidos" class="form-control" value="<?php echo $profesor->getApellidos()?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-offset-2 col-md-2">Telefono</label>
                    <div class="col-md-5">
                        <input type="text" name="telefono" class="form-control" value="<?php echo $profesor->getTelefono()?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <br>
                        <input type="submit" value="Guardar" class="btn btn-primary">
                    </div>
                </div>



            </form>
        </div>
    </div>
</div>
</body>
</html>
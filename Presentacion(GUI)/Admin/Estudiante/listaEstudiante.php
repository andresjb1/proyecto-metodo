<?php
SESSION_START();
$user=$_SESSION['s_user'];
$pass=$_SESSION['s_password'];
if($user == null OR $pass == null)
{
    header('Location: Login.php');
}

include "../../../vendor/autoload.php";
include "../../../config/db.php";

$estudiantes = $entityManager->getRepository(\proyecto\Entidades\Usuario::class)->findAll();

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
            <li class="li-1"><a href="../Estudiante.php">Estudiantes</a></li>
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
            <div class="pull-left">
                <h2>Lista de Estudiantes</h2>
            </div>
            <div class="pull-right">
                <div class="btn-group">
                    <a href="registroUsuario.php" class="btn btn-primary btn-sm">Registrar Estudiante</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <td>Correo</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Telefono</td>
                </tr>
                </thead>
                <tbody>
                <?php if (!empty($estudiantes)): ?>
                    <?php /** @var \proyecto\Entidades\Usuario $Estudiante */
                    foreach ($estudiantes as $estudiante): ?>
                        <tr>
                            <td><a href="editarEstudiante.php?id=<?php echo $estudiante->getId()?>">#<?php echo $estudiante->getCorreo()?></a></td>
                            <td><?php echo $estudiante->getNombre()?></td>
                            <td><?php echo $estudiante->getApellido()?></td>
                            <td><?php echo $estudiante->getTelefono()?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">No hay estudiantes registrados</td>
                    </tr>
                <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>


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

include "../../../vendor/autoload.php";
include "../../../config/db.php";

$aulas = $entityManager->getRepository(\proyecto\Entidades\Aula::class)->findAll();


?>
<!DOCTYPE html>

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
            <li class="li-1"><a href="../Dispositivo/listaDispositivo.php">Dispositivos</a></li>
            <li class="li-1"><a href="../Estudiante/listaEstudiante.php">Estudiantes</a></li>
            <li class="li-1"><a href="../Profesor/listaProfesor.php">Profesores</a></li>
            <li class="li-1"><a href="lista.php">Aulas</a></li>
            <li class="li-1"><a href="../../Negocio/Cierre.php"></span>Sesión</a></li>
        </ul>
    </nav>
</header>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Nueva aula</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="post" action="validar_registro.php">

                <div class="form-group">
                    <label class="col-md-offset-2 col-md-2">Aula</label>
                    <div class="col-md-5">
                        <select name="aulas[]" class="form-control">
                            <?php /** @var \proyecto\Entidades\Aula $aula */
                            foreach ($aulas as $aula): ?>
                                <option value="<?php echo $aula->getId()?>"><?php echo $aula->getNombre()?></option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-offset-2 col-md-2">Horarios</label>
                    <div class="col-md-5">
                        <select name="horarios[]" class="form-control">
                            <?php /** @var \proyecto\Entidades\Horario $horario */
                            foreach ($horarios as $horario): ?>
                                <option value="<?php echo $horario->getId()?>"><?php echo $horario->getHoraEntrada()->format('H:i')?> a <?php echo $horario->getHoraSalida()->format('H:i')?></option>

                            <?php endforeach; ?>
                        </select>
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


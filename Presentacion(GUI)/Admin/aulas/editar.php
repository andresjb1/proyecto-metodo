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

$aula = $entityManager->find(\proyecto\Entidades\Aula::class, $_GET['id']);
$horarios = $entityManager->getRepository(\proyecto\Entidades\Horario::class)->findAll();

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
            <h2>Editar aula #<?php echo $aula->getNumero()?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="post" action="validar_edicion.php?id=<?php echo $aula->getId()?>">
                <div class="form-group">
                    <label class="col-md-offset-2 col-md-2">Número</label>
                    <div class="col-md-5">
                        <input type="text" value="<?php echo $aula->getNumero()?>" name="numero" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-offset-2 col-md-2">Edificio</label>
                    <div class="col-md-5">
                        <input type="text" value="<?php echo $aula->getEdificio()?>" name="edificio" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-offset-2 col-md-2">Capacidad</label>
                    <div class="col-md-5">
                        <input type="text" name="capacidad" class="form-control" value="<?php echo $aula->getCapacidad()?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-offset-2 col-md-2">Horarios</label>
                    <div class="col-md-5">
                        <select name="horarios[]" class="form-control" multiple="multiple">
                            <?php /** @var \proyecto\Entidades\Horario $horario */
                            foreach ($horarios as $horario): ?>
                                <?php if ($aula->tieneHorario($horario)): ?>
                                    <option selected="selected" value="<?php echo $horario->getId()?>"><?php echo $horario->getHoraEntrada()->format('H:i')?> a <?php echo $horario->getHoraSalida()->format('H:i')?></option>
                                <?php else: ?>
                                    <option value="<?php echo $horario->getId()?>"><?php echo $horario->getHoraEntrada()->format('H:i')?> a <?php echo $horario->getHoraSalida()->format('H:i')?></option>
                                <?php endif ?>
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


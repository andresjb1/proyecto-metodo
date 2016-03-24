<?php
SESSION_START();
$user=$_SESSION['s_user'];
$pass=$_SESSION['s_password'];
if($user == null OR $pass == null)
{
    header('Location: Login.php');
}
echo "usuario:$user</br>";
echo "Pass:$pass";
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Solicitudes</title>
    <link rel="shortcut icon" href="IMG/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="Styles/HSGeneral.css" />
    <link rel="stylesheet" href="Styles/Fonts.css"/>
    <link rel="stylesheet" href="Styles/Menu.css"/>
</head>
<script type="text/javascript">
    function muestra_oculta(id){
        if (document.getElementById){ //se obtiene el id
            var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
            el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
        }
    }
    window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
        muestra_oculta('contenido_a_mostrar');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
    }

</script>
<body>
<header>
    <div class="menu_bar">

        <a href="#" class="bt-menu"><img id="logo_menu" src="IMG/logo-latina-2015.png"/>
            <span class="icon-list"></span>
        </a>
    </div>
    <nav>
        <ul>
            <img id="logo_menu_max" src="IMG/logo-latina-2015.png"/>
            <li><a href="#"><span class="icon-home"></span> Inicio</a></li>
            <li><a href="Dispositivo.php"><span class="icon-add-to-list"></span> Solicitar Dispositivo</a></li>
            <li><a href="#"><span class="icon-list"></span> Dispositivos Disponibles</a></li>
            <li><a href="../Negocio/Cierre.php"><span class="icon-tag"></span> Cerrar sesión</a></li>
        </ul>
    </nav>
</header>

</br></br>
<div class="container-center-A">
    <div id="contenido_a_mostrar">
        <input type="submit" name="go" id="go" value="Eliminar"/>
        <a href="Profesor.php"> <input type="submit" name="go" id="go" value=" Buscar  "   /></a>
        <a href="../Dispositivo.php"> <input type="submit" name="go" id="go" value=" Modificar  "   /></a>
        <a href="Aula.php"> <input type="submit" name="go" id="go" value=" Agregar   "   /></a>
    </div>
</div>
<p><a style='cursor: pointer;' onclick="muestra_oculta('contenido_a_mostrar')" title="">Mas Opciones </a></p>

<form id="form1" runat="server">
<form>
    <h1>Solicitar Dispositivo</h1>
    <div class="NewClass">
        <p>
            <label for="NomDispositivo">Dispositivo</label>
            <input type="text" name="NomDispositivo" id="NomDispositivo"/>
        </p>
        <p>
            <label for="NumAula">Aula</label>
            <input type="text" name="NumAula" id="NumAula"/>
        </p>
    </div>
    <p class="p-container">

        <input type="submit" name="go" id="go" value="Solicitar Dispositivo"/>
    </p>

</form>
</body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="JS/menuScript.js"></script>
</html>
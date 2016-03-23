<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Estudiante</title>
    <link rel="shortcut icon" href="../IMG/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="../Styles/HSGeneral.css" />
    <link rel="stylesheet" href="../Styles/Fonts.css"/>
    <link rel="stylesheet" href="../Styles/Menu.css"/>
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

        <a href="#" class="bt-menu"><img id="logo_menu" src="../IMG/logo-latina-2015.png"/>
            <span class="icon-list"></span>
        </a>
    </div>
    <nav>
        <ul>
            <img id="logo_menu_max" src="../IMG/logo-latina-2015.png"/>
            <li><a href="HomeAdm.php"><span class="icon-home"></span> Inicio</a></li>
            <li><a href="Mantenimiento.php"><span class="icon-tools"></span> Mantenimiento Dispositivos</a></li>
            <li><a href="#"><span class="icon-add-user"></span> Estudiantes</a></li>
            <li><a href="Profesor.php"><span class="icon-add-user"></span> Profesores</a></li>
            <li><a href="Aula.php"><span class="icon-add-to-list"></span> Aulas</a></li>
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

<p><a style='cursor: pointer;' onclick="muestra_oculta('contenido_a_mostrar')" title="">&nbsp;&nbsp;&nbsp;&nbsp;
        M&aacute;s Opciones&nbsp;<span class="icon-plus"></span></a></p>
</br></br>
<form>
    <h1>Agregar Estudiante</h1>
    <div class="NewClass">
        <p>
            <label for="NomEstudiante">Nombre Estudiante</label>
            <input type="text" name="NomEstudiante" id="NomEstudiante"/>
        </p>
        <p>
            <label for="NumCarnet">Carnet</label>
            <input type="text" name="NumCarnet" id="NumCarnet"/>
        </p>
        <p>
            <label for="NomCurso">Nombre Curso</label>
            <input type="text" name="NomCurso" id="NomCurso"/>
        </p>
       <!-- <p>
            <label for="NumAula">N° Aula</label>
            <input type="text" name="NumAula" id="NumAula"/>
        </p>-->
    </div>
    <p class="p-container">

        <input type="submit" name="go" id="go" value="Agregar Estudiante"/>
    </p>
</form>

</body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../JS/menuScript.js"></script>
</html>
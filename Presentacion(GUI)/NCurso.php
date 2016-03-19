<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Cursos</title>
    <link rel="shortcut icon" href="IMG/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="Styles/HSGeneral.css" />
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
<div class="formOpciones">


    <div id="contenido_a_mostrar">


        <input type="submit" name="go" id="go" value="Ver Cursos     "/>
        <a href="Estudiante.php"> <input type="submit" name="go" id="go" value=" Estudiantes   "   /></a>
        <a href="Dispositivo.php"> <input type="submit" name="go" id="go" value=" Dispositivos   "   /></a>
        <a href="Profesor.php"> <input type="submit" name="go" id="go" value=" Profesores   "   /></a>
        <a href="Home.php"> <input type="submit" name="go" id="go" value=" Inicio   "   /></a>

    </div>


    <p><a style='cursor: pointer;' onclick="muestra_oculta('contenido_a_mostrar')" title="">Mas Opciones </a></p>

</div>
<form id="form1" runat="server">
    <h1>Universidad Latina</h1>
</form>
<form>
    <h1>Agregar Curso</h1>
    <div class="NewClass">
        <p>
            <label for="NomCurso">Nombre del curso</label>
            <input type="text" name="nomCurso" id="nomCurso"/>
        </p>
        <p>
            <label for="HCurso">Horario del curso</label>
            <input type="text" name="HCurso" id="HCurso"/>
        </p>
        <p>
            <label for="NumAula">Numero del aula</label>
            <input type="text" name="NumAula" id="NumAula"/>
        </p>
    </div>
    <p class="p-container">

        <input type="submit" name="go" id="go" value="Agregar Curso"/>
    </p>


</form>
</body>
</html>


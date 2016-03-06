<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Profesor</title>
    <link rel="shortcut icon" href="IMG/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="Styles/HSGeneral.css" />
</head>
<body>
<form id="form1" runat="server">
    <h1>Universidad Latina</h1>
</form>
<form>
    <h1>Agregar Profesor</h1>
    <div class="NewClass">
        <p>
            <label for="NomProfesor">Nombre Profesor</label>
            <input type="text" name="NomProfesor" id="NomProfesor"/>
        </p>
        <p>
            <label for="NumCarnet">Carnet</label>
            <input type="text" name="NumCarnet" id="NumCarnet"/>
        </p>
        <p>
            <label for="NomCurso">Nombre Curso</label>
            <input type="text" name="NomCurso" id="NomCurso"/>
        </p>
        <!--<p>
            <label for="NumAula">N° Aula</label>
            <input type="text" name="NumAula" id="NumAula"/>
        </p>-->
    </div>
    <p class="p-container">

        <input type="submit" name="go" id="go" value="Agregar Profesor"/>
    </p>

</form>
</body>
</html>
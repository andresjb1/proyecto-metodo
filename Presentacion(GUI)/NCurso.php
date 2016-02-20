<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link rel="stylesheet" type="text/css" href="Styles/HSGeneral.css" />
</head>
<body>
<div class="formOpciones">
<form id="formOpciones" runat="server">
    <h3></h3>
    <input type="submit" name="go" id="go" value="Buscar Cursos"/>
    <input type="submit" name="go" id="go" value="Ver Cursos     "/>

</form>
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


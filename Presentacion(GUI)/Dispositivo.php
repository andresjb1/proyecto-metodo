<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>dispositivo</title>
    <link rel="stylesheet" type="text/css" href="Styles/HSGeneral.css" />
</head>
<body>
<form id="form1" runat="server">
    <h1>Universidad Latina</h1>
</form>
<form>
    <h1>Agregar Dispositivo</h1>
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

        <input type="submit" name="go" id="go" value="Agregar Dispositivo"/>
    </p>

</form>
</body>
</html>
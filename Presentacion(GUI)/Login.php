<html lang="en">
<head>
    <title>Login</title>
    <link href="Styles/HSGeneral.css" rel="stylesheet">
    <link rel="shortcut icon" href="IMG/favicon.png"/>
</head>
<body>
<div id="container-center">
    <form class="formulario-1" action="../Negocio/Acceso.php" method="get" name="frmLogin">
    <div id="div_logo">
    <img id="img_logo" src="IMG/logo_ulatina.png"/>
    </div>
    <br>
    <div class="inset">
        <div class="second-cont">
        <p>
            <label class="label-1" for="email">Correo</label>
            <input class="input-1" type="text" name="email" id="email"/>
        </p>
        <p>
            <label class="label-1" for="password">Contrase&ntilde;a</label>
            <input class="input-1" type="password" name="password" id="password"/>
        </p>
        </div>
    </div>
    <p class="p-container">
        <input class="input-1" type="submit" name="go" id="go" value="Log in"/>
    </p>
</form>
</div>

</body>
</html>
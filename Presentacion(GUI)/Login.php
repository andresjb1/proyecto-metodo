<html lang="en">
<head>
    <title>Login</title>
    <link href="Styles/HSGeneral.css" rel="stylesheet">
    <link rel="shortcut icon" href="IMG/favicon.png"/>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="CnxSesion.js"></script>
</head>
<body>
<div id="container-center">
    <form class="formulario-1" action="../Negocio/Sesion.php" method="POST" name="frmLogin">
        <div id="div_logo">
            <img id="img_logo" src="IMG/logo_ulatina.png"/>
        </div>
        <br>
        <div class="insert">
            <div class="second-cont">
                <p>
                    <label class="label-1" for="email">Correo</label>
                    <input name= email class="input-1" type="text"  id="email"/>
                </p>
                <p>
                    <label class="label-1" for="password">Contrase&ntilde;a</label>
                    <input name= password class="input-1" type="password" id="password"/>
                </p>
            </div>
        </div>
        <p class="p-container">
            <input class="input-1" type="submit" value="Log in">
        </p>
        <div class="mensaje">
            <div id="mensaje1">

            </div>
        </div>
        <div class="error">
            <div id="error1">

            </div>
        </div>
    </form>

</div>

</body>
</html>
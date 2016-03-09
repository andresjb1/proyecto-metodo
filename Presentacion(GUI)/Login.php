<?php

include '../Negocio/config.php';
?>

<html lang="en">
<head>
    <title>Login</title>
    <link href="Styles/HSGeneral.css" rel="stylesheet">
    <link rel="shortcut icon" href="IMG/favicon.png"/>
</head>
<body>
<div id="container-center">
<form action="<?php echo "{$config['url']}/Negocio/Acceso.php" ?>" method="get" name="frmLogin">
    <div id="div_logo">
    <img id="img_logo" src="IMG/logo_ulatina.png"/>
    </div>
    <br>
    <div class="inset">
        <div class="second-cont">
        <p>
            <label for="email">Correo</label>
            <input type="text" name="email" id="email"/>
        </p>
        <p>
            <label for="password">Contrase&ntilde;a</label>
            <input type="password" name="password" id="password"/>
        </p>
        </div>
    </div>
    <p class="p-container">
        <input type="submit" name="go" id="go" value="Log in"/>
    </p>
</form>
</div>

</body>
</html>
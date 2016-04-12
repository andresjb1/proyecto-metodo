
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Home</title>
    <link rel="shortcut icon" href="IMG/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="Styles/HSGeneral.css" />
    <link rel="stylesheet" href="Styles/Fonts.css"/>
    <link rel="stylesheet" href="Styles/Menu.css"/>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <div class="menu_bar">

        <a href="#" class="bt-menu"><img id="logo_menu" src="IMG/logo-latina-2015.png"/>
            <span class="icon-list"></span>
        </a>
    </div>
    <nav class="nav-1">
        <ul>
            <li class="li-1"><img id="logo_menu_max" src="IMG/logo-latina-2015.png"/></li>
            <li class="li-1"><a href="Home.php"><span class="icon-home"></span>Inicio</a></li>
            <li class="li-1"><a href="Prestamo.php"><span class="icon-add-to-list"></span>Prestamo</a></li>
            <li class="li-1"><a href="Perfil.php"><span class="icon-users"></span> Perfil</a></li>
            <li class="li-1"><a href="Contacto.php"><span class="icon-users"></span> Contacto</a></li>

            <li class="li-1"><a href="../Negocio/Cierre.php"><span class="icon-lock"></span> Cerrar sesión</a></li>
        </ul>
    </nav>
</header>

<div class="wrapper">
    <div>




    </div>

    </br>
    <h1 class="head-1">Perfil</h1>
    <form runat="server">
        <div class="p-container">
            <div class="NewClass">
                <br><br>

                <img src="IMG/profile.png" WIDTH="200" HEIGHT="200" alt="contacto"  align="absmiddle">
                <br><br>
                <p>
                    <label class="label-3" for="NomDispositivo">Carnet:</label><br><br>
                </p>
                <p>
                    <label class="label-3" for="NumAula">Nombre:</label>
                    <label class="label-3" for="aula"></label><br><br>
                </p>
                <p>
                    <label class="label-3" for="NumAula">Sede:</label><br><br>
                </p>
                <p>
                    <label class="label-3" for="NumAula">Teléfono:</label><br><br>
                </p>
                <p>
                    <label class="label-3" for="NumAula">Email:</label><br><br><br>
                </p>

                <p>
                    <label class="label-3" </label>
                    ¡Ayuda! Contacte con alguno de nuestro agentes:
                    <a href="Contacto.php">
                        <img src="IMG/ayuda1.jpg" alt="Contacto" align="middle" style="width:50px;height:50px;border:0;">
                    </a>
                </p>
            </div>
        </div>
    </form>
</div>

</body>
<script src="JS/menuScript.js"></script>
</html
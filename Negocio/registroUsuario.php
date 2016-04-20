<?php

if (empty($_POST['txtCarnet'])) {
    header('Location: ../Presentacion(GUI)/Admin/Estudiante.php?error=1');
}

ibase_add_user(monitor_license_info()

)
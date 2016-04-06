<?php
//Funciones CRUD, de primero para evitar errores al ser invocadas mas adelante.
function createPrestamo($codigo, $nombre)
{
    /*INCLUDE PHP AccesoAula.php
    Referencia a una funcion CREATE de AccesoAula.php, en la cual reciba por parametros
    numero, edificio y capacidad
    En la clase AccesoAula, tienen que hacer la relacion con sl script de la BD
    */

    //Si la transaccion es true
    echo 1;
    //Esto echo retorna en la funcion Success:  function (response) deñ archivo CnxAdminAulas
    //Cada numero es una opcion diferente dentro de CnxAdminAulas
}


if (empty($_POST['codigo']) and $_POST['opcion'] != 2 and $_POST['opcion'] != 5) {
    echo "Por favor ingresar el codigo";
}
elseif (empty($_POST['nombre']) and $_POST['opcion'] != 2 and $_POST['opcion'] != 5)
{
    echo "Por favor ignresar el nombre";
}
else
{
    $cod = $_POST['codigo'];
    $nom = $_POST['nombre'];

    createPrestamo($cod, $nom);
}
?>
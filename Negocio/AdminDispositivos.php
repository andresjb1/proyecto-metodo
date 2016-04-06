<?php
//Funciones CRUD, de primero para evitar errores al ser invocadas mas adelante.
function createDispostivo($codigo, $nombre)
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

function readDispositivo($codigo, $nombre)
{
    /*INCLUDE PHP AccesoAula.php
    Referencia a una funcion readAula de AccesoAula.php, en la cual reciba por parametros
    numero, edificio y capacidad
    En la clase AccesoAula, tienen que hacer la relacion con sl script de la BD
    */

    //Si la transaccion es true
    echo 2;
    //Esto echo retorna en la funcion Success:  function (response) deñ archivo CnxAdminAulas
    //Cada numero es una opcion diferente dentro de CnxAdminAulas
}

function readDispositivoCodigo($codigo)
{
    /*INCLUDE PHP AccesoAula.php
    Referencia a una funcion readAula de AccesoAula.php, en la cual reciba por parametros
    numero, edificio y capacidad
    En la clase AccesoAula, tienen que hacer la relacion con sl script de la BD
    */
    echo 5;
    //Esto echo retorna en la funcion Success:  function (response) deñ archivo CnxAdminAulas
    //Cada numero es una opcion diferente dentro de CnxAdminAulas
}

function updateDispositivo($codigo, $nombred)
{
    /*INCLUDE PHP AccesoAula.php
    Referencia a una funcion UPDATE de AccesoAula.php, en la cual reciba por parametros
    numero, edificio y capacidad
    En la clase AccesoAula, tienen que hacer la relacion con sl script de la BD
    */

    //Si la transaccion es true
    echo 3;
    //Esto echo retorna en la funcion Success:  function (response) deñ archivo CnxAdminAulas
    //Cada numero es una opcion diferente dentro de CnxAdminAulas
}

function deleteDispositivo($codigo, $nombre)
{
    /*INCLUDE PHP AccesoAula.php
    Referencia a una funcion DELETE de AccesoAula.php, en la cual reciba por parametros
    numero, edificio y capacidad
    En la clase AccesoAula, tienen que hacer la relacion con sl script de la BD
    */

    //Si la transaccion es true
    echo 4;
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
    $op = $_POST['opcion'];

    //Dependiendo el numero de la opcion ejecutaremos una funcion
    //opcion (1:C, 2:R, 3:U, 4:D)

    if($op == 1)
    {
        createDispostivo($cod, $nom);

    }
    elseif ($op == 2 )
    {
        readDispositivo($cod, $nom);
    }
    elseif ($op == 3)
    {
        updateDispositivo($cod, $nom);
    }
    elseif ($op == 4)
    {
        deleteDispositivo($cod, $nom);
    }
    elseif ($op == 5)
    {
        if(empty($_POST['bCodigo']))
        {
            echo "Falta el codigo del dispositivo a buscar";
        }
        else
        {
            $bCod= $_POST['bCodigo'];
            readDispositivoCodigo($bCod);
        }

    }

}
?>
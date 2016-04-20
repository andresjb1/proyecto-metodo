<?php
//Funciones CRUD, de primero para evitar errores al ser invocadas mas adelante.
function createProfesor($Carnet, $nombre, $apellido)
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

function readProfesor($Carnet, $nombre, $apellido)
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

function readProfesorxCarnet($carnet)
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

function updateProfesor($Carnet, $nombre, $apellido)
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

function deleteProfesor($Carnet, $nombre, $apellido)
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


if (empty($_POST['carnet']) and $_POST['opcion'] != 2 and $_POST['opcion'] != 5) {
    echo "Por favor ingresar el carnet";
}
elseif (empty($_POST['nombre']) and $_POST['opcion'] != 2 and $_POST['opcion'] != 5)
{
    echo "Por favor ingresar el nombre";
}
elseif (empty($_POST['apellido']) and $_POST['opcion'] != 2 and $_POST['opcion'] != 5)
{
    echo "Por favor ingresar el apellido";
}
else
{
    $id = $_POST['carnet'];
    $name = $_POST['nombre'];
    $lastname = $_POST['apellido'];
    $op = $_POST['opcion'];

    //Dependiendo el numero de la opcion ejecutaremos una funcion
    //opcion (1:C, 2:R, 3:U, 4:D)

    if($op == 1)
    {
        if(is_numeric($id) == true)
        {
            createProfesor($id, $name, $lastname);
        }
        else
        {
            echo "Solamente numeros en el carnet";
        }

    }
    elseif ($op == 2 )
    {
        readProfesor($id, $name, $lastname);
    }
    elseif ($op == 3)
    {
        if(is_numeric($id) == true)
        {
            updateProfesor($id, $name, $lastname);
        }
        else
        {
            echo "Solamente numeros en el carnet";
        }
    }
    elseif ($op == 4)
    {
        deleteProfesor($id, $name, $lastname);
    }
    elseif ($op == 5)
    {
        if(empty($_POST['bCarnet']))
        {
            echo "Falta el carnet buscar";
        }
        else
        {
            $BC = $_POST['bCarnet'];
            readProfesorxCarnet($BC);
        }

    }
}
?>
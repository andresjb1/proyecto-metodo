<?php
include "vendor/autoload.php";
include "config/db.php";

    //Funciones CRUD, de primero para evitar errores al ser invocadas mas adelante.
    function createAula($numero, $edificio, $capacidad)
    {
        $aula = new \proyecto\Entidades\Aula($numero, $edificio, $capacidad);
        $entityManager->flush();
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

    function readAula($numero, $edificio, $capacidad)
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

    function readAulaxNumero($numero)
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

    function updateAula($numero, $edificio, $capacidad)
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

    function deleteAula($numero, $edificio, $capacidad)
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

    if (empty($_POST['numero']) and $_POST['opcion'] != 2 and $_POST['opcion'] != 5) {
        echo "Por favor ingresar el numero";
    }
    elseif (empty($_POST['edificio']) and $_POST['opcion'] != 2 and $_POST['opcion'] != 5)
    {
        echo "Por favor ingresar el edificio";
    }
    elseif (empty($_POST['capacidad']) and $_POST['opcion'] != 2 and $_POST['opcion'] != 5)
    {
        echo "Por favor ingresar el edificio";
    }
    else
    {
        $num = $_POST['numero'];
        $edi = $_POST['edificio'];
        $capa = $_POST['capacidad'];
        $op = $_POST['opcion'];

        //Dependiendo el numero de la opcion ejecutaremos una funcion
        //opcion (1:C, 2:R, 3:U, 4:D)

        if($op == 1)
        {
            if(is_numeric($capa) == true)
            {
                createAula($num, $edi, capa);
            }
            else
            {
                echo "Solamente numeros en la capacidad";
            }

        }
        elseif ($op == 2 )
        {
            readAula($num, $edi, capa);
        }
        elseif ($op == 3)
        {
            if(is_numeric($capa) == true)
            {
                updateAula($num, $edi, $capa);
            }
            else
            {
                echo "Solamente numeros en la capacidad";
            }
        }
        elseif ($op == 4)
        {
            deleteAula($num, $edi, $capa);
        }
        elseif ($op == 5)
        {
            if(empty($capa = $_POST['bnAula']))
            {
                echo "Falta el numero a buscar";
            }
            else
            {
                $bnAula = $_POST['bnAula'];
                readAulaxNumero($bnAula);
            }

        }

    }
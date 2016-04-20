/**
 * Created by Emanuel on 5/4/2016.
 */
function peticionDispositivo(txtCodigo, txtNombre, txtbCodigo,numOpcion)
{
    var parametros = {
        "codigo" : txtCodigo,
        "nombre" : txtNombre,
        "bCodigo" : txtbCodigo,
        "opcion" : numOpcion,
    };

    var url = "../../Negocio/AdminDispositivos.php";

    $.ajax({
        data:  parametros,
        url:   url,
        type:  'post',
        beforeSend: function () {
            $("#mensaje1").html("Procesando, espere por favor...");
        },
        success:  function (response) {
            cleanMsg();
            if(response == 1)
            {
                $("#mensaje1").html("Dispositivo agregado.");
            }
            else if(response == 2)
            {
                $("#mensaje1").html("Busqueda realizada.");

                //Hay que devolver en un array o mediante un objeto de json cada atributo
                $('#txtcodigo').val("B. Codigo"); // Adentro de los parentisis remplazamos por atributo
                $("#txtnombre").val("B. Nombre");// Adentro de los parentisis remplazamos por atributo
            }
            else if(response == 3)
            {
                $("#mensaje1").html("Actualizacion realizada .");
            }
            else if(response == 4)
            {
                $("#mensaje1").html("Dispositivo eliminado.");
            }
            else if(response == 5)
            {
                $("#mensaje2").html("Busqueda por numero realizada.");
                $("#txtCodigo").val("B x  Codigo");// Adentro de los parentisis remplazamos por atributo
                $("#txtNombre").val("B x Codigo");// Adentro de los parentisis remplazamos por atributo
            }
            else
            {
                if(numOpcion == 5){
                    $("#error2").html(response); // Mensaje de error en la barra de buqueda de arriba
                }
                else
                {
                    $("#error1").html(response); // Mensaje de error abajo en el formulario
                }
            }
        }
    });
}

function cleanMsg()
{
    $("#mensaje1").html("");
    $("#mensaje2").html("");
    $("#error1").html("");
    $("#error2").html("");
}


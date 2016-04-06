/**
 * Created by Emanuel on 5/4/2016.
 */

function peticionAula(txtNumero, txtEdificio, txtCapacidad, txtBNAula,numOpcion)
{
    var parametros = {
        "numero" : txtNumero,
        "edificio" : txtEdificio,
        "capacidad" : txtCapacidad,
        "bnAula" : txtBNAula,
        "opcion" : numOpcion,
    };

    var url = "../../Negocio/AdminAulas.php";

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
                $("#mensaje1").html("Aula agregada.");
            }
            else if(response == 2)
            {
                $("#mensaje1").html("Busqueda realizada.");

                //Hay que devolver en un array o mediante un objeto de json cada atributo
                $('#txtNumero').val("B. Numero"); // Adentro de los parentisis remplazamos por atributo
                $("#txtEdificio").val("B. Edificio");// Adentro de los parentisis remplazamos por atributo
                $("#txtCapacidad").val("B. Capacidad ");
            }
            else if(response == 3)
            {
                $("#mensaje1").html("Actualizacion realizada .");
            }
            else if(response == 4)
            {
                $("#mensaje1").html("Aula eliminada.");
            }
            else if(response == 5)
            {
                $("#mensaje1").html("Busqueda por numero realizada.");
                $("#txtNumero").val("B x  Numero");// Adentro de los parentisis remplazamos por atributo
                $("#txtEdificio").val("B x Numero");// Adentro de los parentisis remplazamos por atributo
                $("#txtCapacidad").val("B x Numero");// Adentro de los parentisis remplazamos por atributo
            }
            else
            {
                $("#error1").html(response);
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

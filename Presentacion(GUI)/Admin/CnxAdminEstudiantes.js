/**
 * Created by Emanuel on 5/4/2016.
 */

function peticionEstudiante(txtCarnet, txtNombre, txtApellido, txtbCarnet,numOpcion)
{
    var parametros = {
        "carnet" : txtCarnet,
        "nombre" : txtNombre,
        "apellido" : txtApellido,
        "bCarnet" : txtbCarnet,
        "opcion" : numOpcion,
    };

    var url = "../../Negocio/AdminEstudiantes.php";

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
                $("#mensaje1").html("Estudiante agregado.");
            }
            else if(response == 2)
            {
                $("#mensaje1").html("Busqueda realizada.");

                //Hay que devolver en un array o mediante un objeto de json cada atributo
                $('#txtCarnet').val("B. Carnet"); // Adentro de los parentisis remplazamos por atributo
                $("#txtNombre").val("B. Nombre");// Adentro de los parentisis remplazamos por atributo
                $("#txtApellido").val("B. Apellido ");
            }
            else if(response == 3)
            {
                $("#mensaje1").html("Actualizacion realizada .");
            }
            else if(response == 4)
            {
                $("#mensaje1").html("Estudiante eliminado.");
            }
            else if(response == 5)
            {
                $("#mensaje2").html("Busqueda por carnet realizada.");
                $("#txtCarnet").val("B x  Numero");// Adentro de los parentisis remplazamos por atributo
                $("#txtNombre").val("B x Numero");// Adentro de los parentisis remplazamos por atributo
                $("#txtApellido").val("B x Numero");// Adentro de los parentisis remplazamos por atributo
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

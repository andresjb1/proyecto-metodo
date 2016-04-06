/**
 * Created by Emanuel on 5/4/2016.
 */
function peticionPrestamo(txtCodigo, txtNombre)
{
    var parametros = {
        "codigo" : txtCodigo,
        "nombre" : txtNombre,
    };

    var url = "../Negocio/AdminPrestamos.php";

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
                $("#mensaje1").html("Solicitud de prestamo realizada exitosamente.");
            }

            else
            {
                $("#error1").html(response); // Mensaje de error abajo en el formulario
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


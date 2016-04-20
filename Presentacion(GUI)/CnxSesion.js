/**
 * Created by Emanuel on 5/4/2016.
 */
function logear(txtEmail, txtPassword)
{
    $("#error1").html("");
    var parametros = {
        "email" : txtEmail,
        "password" : txtPassword,
    };

    var url = "../Negocio/Sesion.php";

    $.ajax({
        data:  parametros,
        url:   url,
        type:  'post',
        beforeSend: function () {
            $("#mensaje1").html("Procesando, espere por favor...");
        },
        success:  function (response) {
            if(response == 1)
            {
                $("#mensaje1").html("..Ingresando...");
                window.location="../Home.php";
            }
            else if(response == 2)
            {
                $("#mensaje1").html("Ingresando...");
                window.location="Admin/HomeAdm.php";
            }
            else
            {
                $("#error1").html(response);
            }
        }
    });
}
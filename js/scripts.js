// Al cargar la pagina mostramos los resultados y ocultamos el form
$(document).ready(function () {
    $("#card_forms").hide();
    $("#card_resultados").show();
});

// Al hacer click en resultados ocultamos forms y mostramos resultados
$("#resultados").click(function () {
    $("#card_forms").hide();
    $("#card_resultados").show();
});

// Al hacer click en forms ocultamos resultados
$("#forms").click(function () {
    $("#card_forms").show();
    $("#card_resultados").hide();
});

// Función para insertar en MySQL con Ajax/Javascript
function guardarForm() {

    // Obtenemos los valores de los campos
    campo1 = $("#campo1").val();
    campo2 = $("#campo2").val();
    campo3 = $("#campo3").val();
    campo4 = $("#campo4").val();
    campo5 = $("#campo5").val();

    //Definimos una variable para almacenar un mensaje para el usuario
    var mensaje;

    //Definimos una variable para confirmar la accion de guardar los datos
    var confirmacion = confirm("Guardar los datos?");

    //Si confirmamos los datos...
    if (confirmacion == true) {
        //Ocultamos el form
        $("#card_form").hide();
        //Mostramos los resultados
        $("#card_resultados").show();
        //Avisamos al usuario que se estan guardando los datos
        mensaje = "<div class='alert alert-info'>Guardando los datos, espere por favor...</div>";
        document.getElementById("mensaje").innerHTML = mensaje;
        //Hacemos la llamada a php para guardar los datos en la BD
        $.ajax({
            type: "POST",
            url: "php/php.php",
            //Pasamos el array con los datos a PHP
            data: {
                campo1: campo1,
                campo2: campo2,
                campo3: campo3,
                campo4: campo4,
                campo5: campo5,
            },
            dataType: "html",
            //Mostramos el mensaje de resultado
            success: function (data) {
                $("#mensaje").empty();
                $("#mensaje").append('<div class="alert alert-warning alert-dismissible fade show" role="alert" id="mensaje"><strong>Registro guardado: </strong>' + campo1 + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                $("#card_forms").hide();
                $("#card_resultados").show();
            },
            error: function (data) {
                $("#mensaje").empty();
                $("#mensaje").append('<div class="alert alert-danger alert-dismissible fade show" role="alert" id="mensaje"><strong>Se ha producido un error.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                $("#card_forms").hide();
                $("#card_resultados").show();
            }
        });
        //Si no guardamos...
    } else {
        mensaje = '<div class="alert alert-info alert-dismissible fade show" role="alert" id="mensaje"><strong>Cancelado por el Usuario</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        document.getElementById("mensaje").innerHTML = mensaje;
        $("#card_forms").hide();
        $("#card_resultados").show();
    }
}
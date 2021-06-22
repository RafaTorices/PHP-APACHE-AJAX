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

    //Validamos los campos comprobando que no esten vacíos
    if ((campo1 || campo2 || campo3 || campo4 || campo5) != '') {
        //Definimos una variable para almacenar un mensaje para el usuario
        var mensaje;
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
            url: "php/insert.php",
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
                setInterval('location.reload()', 3000);
                $("#mensaje").empty();
                $("#mensaje").append('<div class="alert alert-primary" role="alert">Guardando registro de: <strong>' + campo1 + '</strong></div>');
                $("#card_forms").hide();
                $("#card_resultados").show();
            },
            //Si hay error...
            error: function (data) {
                setInterval('location.reload()', 3000);
                $("#mensaje").empty();
                $("#mensaje").append('<div class="alert alert-danger" role="alert">Error en el registro, inténtelo de nuevo</div>');
                $("#card_forms").hide();
                $("#card_resultados").show();
            }
        });
    } else {
        setInterval('location.reload()', 3000);
        $("#mensaje").empty();
        $("#mensaje").append('<div class="alert alert-danger" role="alert">Error en el registro, campos vacíos</div>');
    }
}

// Función para borrar en MySQL con Ajax/Javascript
function borrarRegistro(value) {
    // Obtenemos el id del registro
    id = value;
    //Definimos una variable para almacenar un mensaje para el usuario
    var mensaje;
    //Avisamos al usuario que se estan guardando los datos
    mensaje = "<div class='alert alert-info'>Guardando los datos, espere por favor...</div>";
    document.getElementById("mensaje").innerHTML = mensaje;
    // console.log("El id es: " + id);
    //Hacemos la llamada a php para borrar los datos en la BD
    $.ajax({
        type: "POST",
        url: "php/borrar.php",
        //Pasamos el array con los datos a PHP
        data: {
            id: id,
        },
        dataType: "html",
        //Mostramos el mensaje de resultado
        success: function (data) {
            setInterval('location.reload()', 3000);
            $("#mensaje").empty();
            $("#mensaje").append('<div class="alert alert-primary" role="alert">Borrando registro ID: <strong>' + id + '</strong></div>');
            $("#card_forms").hide();
            $("#card_resultados").show();
        },
        //Si hay error...
        error: function (data) {
            setInterval('location.reload()', 3000);
            $("#mensaje").empty();
            $("#mensaje").append('<div class="alert alert-danger" role="alert">Error en el registro, inténtelo de nuevo</div>');
            $("#card_forms").hide();
            $("#card_resultados").show();
        }
    });
}
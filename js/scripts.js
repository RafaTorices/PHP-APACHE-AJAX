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
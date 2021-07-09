// Buscador con jQuery
function buscar_ahora(buscar){
    var parametros = {"buscar":buscar};

    $.ajax({
        data: parametros,
        type: 'POST',
        url: 'backend/buscador.php',
        success: function(data){
            document.getElementById("datos_buscador").innerHTML = data;
        }
    });
}
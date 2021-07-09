var xhr = new XMLHttpRequest();

function buscar_ahora(buscar){
    var parametros = {"buscar":buscar};

    var parametros = new FormData(data);

    xhr.open('POST', 'backend/buscador.php');
    xhr.onload = function(){
        if(xhr.status === 200){
            var json = JSON.parse(xhr.responseText);
            console.log(JSON.parse(xhr.responseText));
        }
    }
    xhr.send(parametros);


}
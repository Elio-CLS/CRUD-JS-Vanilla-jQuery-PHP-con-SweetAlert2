// Muestra la tabla al entrar en al pagina por primera vez
function recargaTabla(){

    let xhr_view = new XMLHttpRequest();

    xhr_view.open('POST', 'view/view_tabla.php',true);
    xhr_view.onload = function(){
    if(this.status === 200){

        console.log('carga de la tabla');
        document.getElementById('datos_buscador').innerHTML = xhr_view.responseText;

    } else {
        console.log('Error en cargar petision' + this.status);
    }
}

xhr_view.send();

}

recargaTabla();

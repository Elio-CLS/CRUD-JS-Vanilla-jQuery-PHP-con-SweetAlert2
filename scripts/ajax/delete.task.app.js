// Borrado de la tarea de la DB, con ajax en vanilla JS
function sendBorrar(borrar_task){


    var borrar = {"borrar_task": borrar_task};
    $.ajax({
        data: borrar,
        type: 'POST',
        url: 'view/view_delete.php',
        success: function(data){
            //document.getElementById("datos_buscador").innerHTML = data;
            console.log(data);
            recargaTabla();
        }
    });

}









/*
function sendBorrar(borrar_task){

    var borrar = {"borrar_task": borrar_task};
    let xhr_borrar = new XMLHttpRequest();

    xhr_borrar.open('POST', 'view/view_delete.php');
    xhr_borrar.onload = function(){
        if(this.status === 200){

            console.log('BORRADO');
            console.log(xhr_borrar.responseText);
            //document.getElementById('datos_buscador').innerHTML = xhr_view.responseText;
            recargaTabla();
        } else {
            console.log('Error en cargar petision' + this.status);
        }
    }

    xhr_borrar.send(borrar['borrar_task']);

}
*/




/*
    console.log(borrar);
    borrar = JSON.stringify(JSON.parse(borrar));
    console.log('json '+ borrar);


    xhr_borrar.open('POST', 'view/view_delete.php', true);
        xhr_borrar.onload = () => {

        if(xhr_borrar.status === 200){

            console.log('Borrado Exitoso');
            console.log(xhr_borrar.responseText);

        }

    }

    xhr_borrar.send(borrar);
    console.log('Boton de borrado funcionando');

*/



   /* 
    var xhr_borrar = new XMLHttpRequest();
    var data_form = document.getElementsByClassName('tarea-id');



    data_form.addEventListener('submit', (ev) => {


        var form_borrar = new FormData(data_form);
        console.log(form_borrar);
        console.log(xhr_borrar);

        xhr_borrar.open('POST', 'view/view_delete.php', true);
        xhr_borrar.onload = () => {

        if(xhr_borrar.status === 200){

            console.log('Borrado Exitoso');

        }

    }

    xhr_borrar.send(form_borrar);
    console.log('Boton de borrado funcionando');

    ev.preventDefault();

    });

*/
    

    







    // Evita que se refresque la pagina con la accion del boton en el form
    //e.preventDefault();
/*
var id = [];
var objeto = new XMLHttpRequest();
objeto.open('POST', 'view/view_delete.php', true);
objeto.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
objeto.onreadystatechange = function(){

    console.log(objeto.responseText);

    //document.getElementById('titulo').innerHTML = objeto.responseText;
}
objeto.send(id = borrarID);

}
*/
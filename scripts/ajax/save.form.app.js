// Guadado en DB del formulario, con ajax en vanilla JS

let xhr_form = new XMLHttpRequest();
let data = document.getElementById('formulario');


data.addEventListener('submit', (evento) => {

    let form = new FormData(data);
    console.log(form);

    xhr_form.open('POST', 'view/view_save.php');
    xhr_form.onload = function(){
        if(this.status === 200){

            console.log('carga exitosa');
            //alert('Carga exitosa');

            // Recarga la tabla
            recargaTabla();

            // Resetea el formulario
            document.getElementById('formulario').reset();

        } else {
            console.log('Error en cargar petision' + this.status);
        }
    }

    xhr_form.send(form);
    console.log('boton funcionando');

    // Evita que se refresque la pagina con la accion del boton en el form
    evento.preventDefault();

});


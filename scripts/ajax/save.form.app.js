// Guadado en DB del formulario, con ajax en vanilla JS

let xhr_form = new XMLHttpRequest();
let data = document.getElementById('formulario');

// Activa que url se seleccionara
var actualizar = false;


data.addEventListener('submit', (evento) => {

    // Selecciona la url cuando se Guarda o Edita una tarea
    var url = actualizar === false ? 'view/view_save.php' : 'view/view_update.php';


    let form = new FormData(data);
    
    
    xhr_form.open('POST', url);
    xhr_form.onload = function(){

        this.status === 200 ? guardado() : errorMSJ() ; // Alertas

        // Recarga la Tabla de tareas
        recargaTabla();

        // Recarga el Formulario
        recargaForm();

        actualizar = false;
        // Resetea el formulario
        document.getElementById('formulario').reset();

    }


    xhr_form.send(form);

    // Evita que se refresque la pagina con la accion del boton en el form
    evento.preventDefault();

});


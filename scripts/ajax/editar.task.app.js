// Carga los datos en el formulario para editar la tarea seleccionada
function sendEditar(editar_task){

    var editar = {"editar_task": editar_task};

    // Alert para confirmar eliminacion de tarea
    if(confirm('Desea editar esta tarea? Complete ambos campos')){

        $.ajax({
            data: editar,
            type: 'POST',
            url: 'view/view_edit.php',
            success: function(data){

                actualizar = true;
                document.getElementById("form_edit").innerHTML = data;
            }
        });
    
    }
    return actualizar;
}

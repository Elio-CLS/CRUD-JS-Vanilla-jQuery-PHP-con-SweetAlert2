function borrando(borrar_task){

    var borrar = {"borrar_task": borrar_task};

    Swal.fire({
        position: 'center',
        title: '¿Desea borrar esta tarea?',
        text: 'No se podra recuperar los datos de nuevo.',
        icon: 'warning',
        iconColor: '#ffa801',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        cancelButtonColor: '#dc3545',
        confirmButtonText: 'Confirmar',
        confirmButtonColor: '#198754',
      }).then((result) => {
        
        if (result.isConfirmed) {

          sendBorrar(borrar);

        }

       
      })

      
}
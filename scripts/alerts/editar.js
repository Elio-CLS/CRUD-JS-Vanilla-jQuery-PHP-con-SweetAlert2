function editando(editar_task){

    var editar = {"editar_task": editar_task};

    Swal.fire({
        position: 'center',
        title: '¿Desea editar esta tarea?',
        text: 'Complete todos los campos',
        icon: 'question',
        iconColor: '#0984e3',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        cancelButtonColor: '#dc3545',
        confirmButtonText: 'Confirmar',
        confirmButtonColor: '#198754',
      }).then((result) => {
        
        if (result.isConfirmed) {

          sendEditar(editar);

        }

       
      })

      
}
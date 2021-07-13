function guardado(){

    Swal.fire({
        position: 'bottom',
        icon: 'success',
        iconColor: '#198754',
        title: 'Tarea guardada exitosamente',
        width: '45%',
        grow: true,
        toast: true,
        showCloseButton: true,
        showConfirmButton: false,
        allowOutsideClick: true,
        allowEscapeKey: true,
	      allowEnterKey:  true,
        timerProgressBar: true,
        timer: 4000
      })
}
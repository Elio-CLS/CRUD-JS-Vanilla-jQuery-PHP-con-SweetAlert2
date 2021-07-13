function errorMSJ(){

    Swal.fire({
        position: 'bottom',
        icon: 'error',
        iconColor: 'dc3545',
        title: 'Error!, Intentelo de nuevo',
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
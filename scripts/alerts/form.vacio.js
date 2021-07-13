function form_vacio(){

    Swal.fire({
        position: 'bottom',
        icon: 'error',
        iconColor: '#dc3545',
        title: 'Error! Complete todos los campos',
        width: '45%',
        //grow: true,
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
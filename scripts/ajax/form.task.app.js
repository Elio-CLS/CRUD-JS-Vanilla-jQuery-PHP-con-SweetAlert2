// Carga vacio el contenido del formulario
function recargaForm(){

    let xhr_form = new XMLHttpRequest();

    xhr_form.open('POST', 'view/view_form.php', true);
    xhr_form.onload = () => {
        if(xhr_form.status === 200){

            document.getElementById('form_edit').innerHTML = xhr_form.responseText;
        }
    }

    xhr_form.send();
}

recargaForm();
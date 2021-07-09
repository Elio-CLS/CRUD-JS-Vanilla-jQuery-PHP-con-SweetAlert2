<?php 
// INCLUIR ARCHIVOS
include('../class/c_borrar.php');

if(isset($_POST['borrar_task'])){

    $id = $_POST['borrar_task'];

    
    // EJECUTAMOS CONSULTA
    $borrar = new Borrar;
    $borrar->deleteBD($id);

}

?>
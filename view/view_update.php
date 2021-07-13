<?php 
// INCLUIR ARCHIVOS
include('../class/c_editar.php');



if(!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['texto'])){

    

    // ID
    $id = $_POST['id'];

    // TITULO
    $title = trim($_POST['title']);

    // TEXTO
    $texto = trim($_POST['texto']);

     

    // ACTUALIZANDO DB
    if(isset($title) && isset($texto)){

        // CONSULTA ACTUALIZAR
        $actualizar = new Editar;
        $actualizar->actualizarBD($id, $title, $texto);
        
    }
}


?>
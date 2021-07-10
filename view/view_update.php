<?php 
// INCLUIR ARCHIVOS
include('../class/c_editar.php');





if(empty($_POST['id']) && empty($_POST['title']) && empty($_POST['texto'])){

    $_SESSION['mensaje'] = 'Titulo y Texto vacios.';
    $_SESSION['msj_color'] = "alert-warning";
    //header('location: ../view_edit.php');
} else {
    // ID
    $id = $_POST['id'];


     // TITULO
     if(empty($_POST['title'])){
        //header('location: ../view_edit.php');
    } else {
        $title = trim($_POST['title']);
    }


    // TEXTO
    if(empty($_POST['texto'])){
        //header('location: ../view_edit.php');
    } else {
        $texto = trim($_POST['texto']);
    }


    // ACTUALIZANDO DB
    if(isset($title) && isset($texto)){

        

        // CONSULTA ACTUALIZAR
        $actualizar = new Editar;
        $actualizar->actualizarBD($id, $title, $texto);


        
    } else {
        $_SESSION['mensaje'] = 'Completa ambos campos.';
        $_SESSION['msj_color'] = 'alert-warning';
        //header('location: ../view_edit.php');
    }
}


?>
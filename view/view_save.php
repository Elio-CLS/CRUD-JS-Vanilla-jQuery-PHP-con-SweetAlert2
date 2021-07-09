<?php 
include_once('../class/c_guardar.php');

if(empty($_POST['title']) && empty($_POST['texto'])){

    $_SESSION['mensaje'] = 'Titulo y Texto vacios.';
    $_SESSION['msj_color'] = "alert-warning";
    //header('location: ../board.php');

} else {

    // TITULO
    if(empty($_POST['title'])){
        //header('location: ../board.php');
    } else {
        $title = trim($_POST['title']);
    }



    // TEXTO
    if(empty($_POST['texto'])){
        //header('location: ../board.php');
    } else {
        $texto = trim($_POST['texto']);
    }



    // GUARDADO DB
    if(isset($title) && isset($texto)){

        // EJECUTAMOS CONSULTA
        $guardar = new Guardar;
        $guardar->guardarBD($title, $texto);
        //header('location: ../board.php');


    } else {
        $_SESSION['mensaje'] = 'Completa ambos campos.';
        $_SESSION['msj_color'] = 'alert-warning';
        //header('location: ../board.php');
    }

}



?>
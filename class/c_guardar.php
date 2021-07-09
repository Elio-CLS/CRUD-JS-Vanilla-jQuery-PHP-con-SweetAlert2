<?php 
include_once('../backend/conexion.php');

class Guardar extends Conexion{

    public function guardarBD($title, $texto){
        $this->title = $title;
        $this->texto = $texto;


        $conect = new Conexion;
        $sql_reg = "INSERT INTO tareas (title, texto) VALUES (:title, :texto)";

        $stml_save = $conect->conexionBD()->prepare($sql_reg);
        $stml_save->bindParam(':title', $title, PDO::PARAM_STR);
        $stml_save->bindParam(':texto', $texto, PDO::PARAM_STR);


        if($stml_save->execute()){
            $_SESSION['mensaje'] = 'Tarea guardada exitosamente.';
            $_SESSION['msj_color'] = 'alert-success';
            header('location: ../board.php');
        } else {
            $_SESSION['mensaje'] = 'Error, intentelo de nuevo.';
            $_SESSION['msj_color'] = 'alert-warning';
            header('location: ../board.php');
        }
    }
}

?>
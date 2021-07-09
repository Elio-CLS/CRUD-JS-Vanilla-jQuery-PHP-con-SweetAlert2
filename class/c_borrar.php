<?php
include('../backend/conexion.php');

class Borrar extends Conexion{


    public function deleteBD($id){
        $this->id = $id;


        $conect = new Conexion;
        $sql_delete = "DELETE FROM tareas WHERE id = :id";


        $stmt_delete = $conect->conexionBD()->prepare($sql_delete);
        $stmt_delete->bindParam(':id', $id, PDO::PARAM_INT);

        
        if($stmt_delete->execute()){
            $_SESSION['mensaje'] = 'Se borro la tarea';
            $_SESSION['msj_color'] = 'alert-danger';
            
        } else {
            $_SESSION['mensaje'] = 'Error, intentelo de nuevo.';
            $_SESSION['msj_color'] = 'alert-warning';
            
        }

        return $stmt_delete;

    }
}

?>
<?php 
include_once('../backend/conexion.php');

class Mostrar extends Conexion{

    public function mostrarBD(){

        $conect = new Conexion;
        $sql_view = "SELECT * FROM tareas";
        $stml_view = $conect->conexionBD()->prepare($sql_view);
        $stml_view->execute();
        $stml_view->rowCount();

        return $stml_view;
    }
}

?>
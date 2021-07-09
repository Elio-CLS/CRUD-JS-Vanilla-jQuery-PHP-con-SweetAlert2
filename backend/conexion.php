<?php 

session_start();
error_reporting(0);


    class Conexion {

        public function conexionBD(){

            $db_conexion = 'mysql:dbname=db_mis_tareas;host=localhost';
            $us = 'root';
            $ps = '';

            $conect = new PDO($db_conexion, $us, $ps);

            return $conect;
        }
    }

?>
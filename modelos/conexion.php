<?php 
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost;port=3308;dbname=web-4a", "soporte", "soporte");
    
            $link->exec("set names utf8");
    
            return $link;
        }
    }
    
?>
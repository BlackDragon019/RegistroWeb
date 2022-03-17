<?php
    class Conectar{
        public function conexion()
        {
            $servidor = "localhost";
            $usuario = "Ad";
            $password = "ad";
            $base = "empleoamazon";
            
            
            $conexion = mysqli_connect($servidor,$usuario,$password,$base);
            $conexion->set_charset('utf8');
            return $conexion;
        }
    }
?>

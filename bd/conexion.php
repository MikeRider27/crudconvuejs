<?php
    class Conexion{
        public static function Conectar(){
            define('servidor', 'localhost');
            define('nombre_bd', 'crudconvuejs');
            define('usuario', 'postgres');
            define('password', 'dgtic123');
            try{
                $conexion = new PDO("pgsql:host=".servidor."; dbname=".nombre_bd, usuario, password);
                return $conexion;
            }catch (Exception $e){
                die("El error de Conexión es: ". $e->getMessage());
            }
        }
    }
?>

<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'sql470.main-hosting.eu');
        define('nombre_bd', 'u349577050_andres');
        define('usuario', 'u349577050_anfelole');
        define('password', '@nFeLoLe11');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}
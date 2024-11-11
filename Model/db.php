<?php
class Database{
    public static function connect(){
        $conexion = new mysqli("localhost", "root", "root", "rdr_users");  
        $conexion -> query("SET NAMES 'utf8'");
         return $conexion;
    }
} 
<?php
class DataBase
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "hEYKER13.";
    private $db = "natura_medi";

    public function conexion() {

        try{
            $sql = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
            return $sql;
        }catch(PDOException $e){
            die("Error al conectar a la Base de Datos:".$e->getMessage());
        }
       
    }
    
}

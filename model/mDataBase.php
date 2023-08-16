<?php
class DataBase
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "hEYKER13.";
    private $db = "natura_medi";
    public $datosClientes;
    public $clientes;

    public function conexion() {
        $sql = new mysqli($this->host,$this->user,$this->pass,$this->db);

        if($sql->error){
        echo 'Error al Conectarse a la Base de Datos';
        }else{
            return $sql;
        }
       
    }
    
}
?>

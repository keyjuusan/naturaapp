<?php
require_once("mDataBase.php");

class mClientes extends DataBase{
    private $nombre;
    private $id;
    private $cedula;
    private $telefono;
    
    public function consultar(){
        $cConsulto = $this->conexion()->query("SELECT * FROM clientes");
 
        if($cConsulto){
            // echo $cConsulto->fetch_all()[0][0];
            echo json_encode($cConsulto->fetch_all());
        }else{
            echo 'No se pudo realizar la consulta';
        }

        $this->conexion()->close();
    }

    public function registrar(){
        $cEnvio = $this->conexion()->query("INSERT INTO clientes(nombre,telefono,cedula) VALUES 
        ('".$this->nombre."',".$this->telefono.",".$this->cedula.")");

        if($cEnvio){
            echo $cEnvio.": Datos guardados correctamente";
        }else {
            echo "Error al insertar datos";
        }

        $this->conexion()->close();
    }

    public function actualizar(){
        $cActualizo = $this->conexion()->query("UPDATE clientes set nombre='".$this->getNombre()."',cedula=".$this->getCedula().",telefono=".$this->getTelefono()." WHERE id='".$this->getId()."'");

        if($cActualizo){
            echo $cActualizo.": Datos actualizados correctamente";
        }else {
            echo "Error al actualizar los datos";
        }

        $this->conexion()->close();
    }

    public function eliminar(){
        $cElimino = $this->conexion()->query("DELETE FROM clientes WHERE id='".$this->getId()."'");

        if($cElimino){
            echo $cElimino.": Datos eliminados correctamente";
        }else {
            echo "Error al eliminar los datos";
        }

        $this->conexion()->close();
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setCedula($cedula){
        $this->cedula = $cedula;
    }
    public function getCedula(){
        return $this->cedula;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    

}
?>
<?php
require_once("mDataBase.php");

class mProveedores extends DataBase{
    private $empresa;
    private $codigo;
    private $telefono;
    
    public function consultar(){
        $cConsulto = $this->conexion()->query("SELECT * FROM proveedores");
 
        if($cConsulto){
            // echo $cConsulto->fetch_all()[0][0];
            echo json_encode($cConsulto->fetchAll());
        }else{
            echo 'No se pudo realizar la consulta';
        }

        // $this->conexion()->close();
    }

    public function registrar(){
        $cInserto = $this->conexion()->query("INSERT INTO proveedores(codigo,empresa,telefono) VALUES 
        (".$this->getCodigo().",'".$this->getEmpresa()."',".$this->getTelefono().")");

        if($cInserto){
            echo "Datos guardados correctamente";
        }else {
            echo "Error al insertar datos";
        }

        // $this->conexion()->close();
    }

    public function actualizar(){
        $cActualizo = $this->conexion()->query("UPDATE proveedores set empresa='".$this->getempresa()."',telefono=".$this->getTelefono()." WHERE codigo=".$this->getCodigo());

        if($cActualizo){
            echo "Datos actualizados correctamente";
        }else {
            echo "Error al actualizar los datos";
        }

        // $this->conexion()->close();
    }

    public function eliminar(){
        $cElimino = $this->conexion()->query("DELETE FROM proveedores WHERE codigo='".$this->getCodigo()."'");

        if($cElimino){
            echo "Datos eliminados correctamente";
        }else {
            echo "Error al eliminar los datos";
        }

        // $this->conexion()->close();
    }
    
    public function setEmpresa($empresa){
        $this->empresa = $empresa;
    }
    public function getEmpresa(){
        return $this->empresa;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    

}
?>
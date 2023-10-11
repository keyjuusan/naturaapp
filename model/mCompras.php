<?php
require_once "mDataBase.php";

class mCompras extends DataBase{
    private $id;
    private $descripcion;
    private $costo;
    private $fecha;
    private $hora;
    private $proveedorId;
    
    public function consultar(){
 
        try{
            $cConsulto = $this->conexion()->query("select A.id, A.descripcion, A.costo, B.empresa, A.fecha, A.hora, A.id_proveedor from compras A inner join proveedores B where A.id_proveedor = B.codigo");
            echo json_encode($cConsulto->fetchAll());
        }catch(PDOException $e){
            echo 'No se pudo realizar la consulta: '.$e->getMessage();
        }

        // $this->conexion()->close();
    }

    public function registrar(){

        try{
            $this->conexion()->query("INSERT INTO compras(descripcion,costo,fecha,hora,id_proveedor,id_empleado) VALUES 
            ('".$this->getDescripcion()."',".$this->getCosto().",'".$this->getFecha()."','".$this->getHora()."',".$this->getProveedorId().",". 1 .")");
            
            echo "Datos guardados correctamente";
        }catch(PDOException $e) {
            echo "Error al insertar datos: ".$e->getMessage();
        }

        // $this->conexion()->close();
    }

    public function actualizar(){

        try{
            $this->conexion()->query("UPDATE compras set descripcion='".$this->getDescripcion()."',costo='".$this->getCosto()."',fecha='".$this->getFecha()."',hora='".$this->getHora()."',id_proveedor=".$this->getProveedorId()." WHERE id='".$this->getId()."'");
            echo "Datos actualizados correctamente";
        }catch(PDOException $e) {
            echo "Error al actualizar los datos: ".$e->getMessage();
        }

        // $this->conexion()->close();
    }

    public function eliminar(){

        try{
            $this->conexion()->query("DELETE FROM compras WHERE id='".$this->getId()."'");
            echo "Datos eliminados correctamente";
        }catch(PDOException $e) {
            echo "Error al eliminar los datos: ".$e->getMessage();
        }

        // $this->conexion()->close();
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setCosto($costo){
        $this->costo = $costo;
    }

    public function getCosto(){
        return $this->costo;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }

    public function getHora(){
        return $this->hora;
    }

    public function setProveedorId($proveedorId){
        $this->proveedorId = $proveedorId;
    }

    public function getProveedorId(){
        return $this->proveedorId;
    }
}

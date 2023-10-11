<?php
require_once "mDataBase.php";

class mGastos extends DataBase{
    private $id;
    private $descripcion;
    private $categoria;
    private $costo;
    private $fecha;
    private $hora;
    
    public function consultar(){
 
        try{
            $cConsulto = $this->conexion()->query("select * from gastos");
            echo json_encode($cConsulto->fetchAll());
        }catch(PDOException $e){
            echo 'No se pudo realizar la consulta: '.$e->getMessage();
        }

        // $this->conexion()->close();
    }

    public function registrar(){

        try{
            $this->conexion()->query("INSERT INTO gastos(descripcion,categoria,costo,fecha,hora,id_empleado) VALUES 
            ('".$this->getDescripcion()."','".$this->getCategoria()."',".$this->getCosto().",'".$this->getFecha()."','".$this->getHora()."',". 1 .")");
            
            echo "Datos guardados correctamente";
        }catch(PDOException $e) {
            echo "Error al insertar datos: ".$e->getMessage();
        }

        // $this->conexion()->close();
    }

    public function actualizar(){

        try{
            $this->conexion()->query("UPDATE gastos set descripcion='".$this->getDescripcion()."',categoria='".$this->getCategoria()."',costo=".$this->getCosto().",fecha='".$this->getFecha()."',hora='".$this->getHora()."' WHERE id='".$this->getId()."'");
            echo "Datos actualizados correctamente";
        }catch(PDOException $e) {
            echo "Error al actualizar los datos: ".$e->getMessage();
        }

        // $this->conexion()->close();
    }

    public function eliminar(){

        try{
            $this->conexion()->query("DELETE FROM gastos WHERE id='".$this->getId()."'");
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

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function getCategoria(){
        return $this->categoria;
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

}

<?php
require_once "mDataBase.php";

class mVentas extends DataBase{
    private $id;
    private $descripcion;
    private $precio;
    private $fecha;
    private $hora;
    private $clienteId;
    
    public function consultar(){
        $cConsulto = $this->conexion()->query("select A.id, A.descripcion, A.precio, B.nombre, A.fecha, A.hora, A.id_cliente from ventas A inner join clientes B where A.id_cliente = B.id");
 
        if($cConsulto){
            // echo $cConsulto->fetch_all()[0][0];
            echo json_encode($cConsulto->fetchAll());
        }else{
            echo 'No se pudo realizar la consulta';
        }

        // $this->conexion()->close();
    }

    public function registrar(){
        $cEnvio = $this->conexion()->query("INSERT INTO ventas(descripcion,precio,fecha,hora,id_cliente,id_producto,id_empleado) VALUES 
        ('".$this->getDescripcion()."',".$this->getPrecio().",'".$this->getFecha()."','".$this->getHora()."',".$this->getClienteId().",". 1 .",". 1 .")");

        if($cEnvio){
            echo "Datos guardados correctamente";
        }else {
            echo "Error al insertar datos";
        }

        // $this->conexion()->close();
    }

    public function actualizar(){
        $cActualizo = $this->conexion()->query("UPDATE ventas set descripcion='".$this->getDescripcion()."',precio='".$this->getPrecio()."',fecha='".$this->getFecha()."',hora='".$this->getHora()."',id_cliente=".$this->getClienteId()." WHERE id='".$this->getId()."'");

        if($cActualizo){
            echo "Datos actualizados correctamente";
        }else {
            echo "Error al actualizar los datos";
        }

        // $this->conexion()->close();
    }

    public function eliminar(){
        $cElimino = $this->conexion()->query("DELETE FROM ventas WHERE id='".$this->getId()."'");

        if($cElimino){
            echo "Datos eliminados correctamente";
        }else {
            echo "Error al eliminar los datos";
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

    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function getPrecio(){
        return $this->precio;
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

    public function setClienteId($clienteId){
        $this->clienteId = $clienteId;
    }

    public function getClienteId(){
        return $this->clienteId;
    }
}

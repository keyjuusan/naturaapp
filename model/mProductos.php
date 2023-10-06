<?php
require_once("mDataBase.php");

class mproductos extends DataBase{
    private $id;
    private $nombre;
    private $categoria;
    private $cantidad;
    private $descripcion;
    private $presentacion;
    private $precio;
    
    public function consultar(){
        $cConsulto = $this->conexion()->query("SELECT * FROM productos");
 
        if($cConsulto){
            // echo $cConsulto->fetch_all()[0][0];
            echo json_encode($cConsulto->fetchAll());
        }else{
            echo 'No se pudo realizar la consulta';
        }

        // $this->conexion()->close();
    }

    public function registrar(){
        $cEnvio = $this->conexion()->query("INSERT INTO productos(nombre,categoria,cantidad,descripcion,presentacion,precio) VALUES 
        ('".$this->getNombre()."','".$this->getCategoria()."',".$this->getCantidad().",'".$this->getDescripcion()."','".$this->getPresentacion()."',".$this->getPrecio().")");

        if($cEnvio){
            echo "Datos guardados correctamente";
        }else {
            echo "Error al insertar datos";
        }

        // $this->conexion()->close();
    }

    public function actualizar(){
        $cActualizo = $this->conexion()->query("UPDATE productos set nombre='".$this->getNombre()."', categoria='".$this->getCategoria()."', cantidad=".$this->getCantidad().", descripcion='".$this->getDescripcion()."', presentacion='".$this->getPresentacion()."', precio=".$this->getPrecio()." WHERE id=".$this->getId());

        if($cActualizo){
            echo "Datos actualizados correctamente";
        }else {
            echo "Error al actualizar los datos";
        }

        // $this->conexion()->close();
    }

    public function eliminar(){
        $cElimino = $this->conexion()->query("DELETE FROM productos WHERE id='".$this->getId()."'");

        if($cElimino){
            echo "Datos eliminados correctamente";
        }else {
            echo "Error al eliminar los datos";
        }

        // $this->conexion()->close();
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

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getPresentacion() {
        return $this->presentacion;
    }

    public function setPresentacion($presentacion) {
        $this->presentacion = $presentacion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }
}
?>
<?php
require_once "mConsultable.php";

class mFactura extends Consultable{
    private $id;
    private $descripcion;
    private $precio;
    private $fecha;
    private $hora;

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

}

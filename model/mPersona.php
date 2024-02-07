<?php
require_once("mConsultable.php");

class mPersona extends Consultable{
    private $nombre;
    private $id;
    private $cedula;
    private $telefono;
    
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
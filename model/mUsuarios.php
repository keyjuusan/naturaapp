<?php
require_once("mDataBase.php");

class mUsuarios extends DataBase{
    private $nombre;
    private $id;
    private $cargo;
    private $contraseña;
    
    public function consultar(){

        try {
            $cConsulto = $this->conexion()->query("SELECT * FROM usuarios");
            echo json_encode($cConsulto->fetchAll());
        } catch (PDOException $e) {
            echo json_encode("Error al consultar en la base de datos: ".$e->getMessage());
        }
        
    }

    public function registrar(){

        try {
            $cEnvio = $this->conexion()->query("INSERT INTO usuarios(nombre,cargo,contraseña) VALUES 
        ('".$this->getNombre()."','".$this->getCargo()."','".$this->getContraseña()."')");

            echo "Datos guardados correctamente";

        } catch (PDOException $e) {
            
            echo "Error al insertar datos: ".$e->getMessage();
        }

        // $this->conexion()->close();
    }

    public function actualizar(){
        try{
            $this->conexion()->query("UPDATE usuarios set nombre='".$this->getNombre()."',cargo='".$this->getCargo()."',contraseña='".$this->getcontraseña()."' WHERE id='".$this->getId()."'");

            echo "Datos actualizados correctamente";
        }catch(PDOException $e) {
            echo "Error al actualizar los datos: ".$e->getMessage();
        }

        // $this->conexion()->close();
    }

    public function eliminar(){
        try{
            $this->conexion()->query("DELETE FROM usuarios WHERE id='".$this->getId()."'");
            echo "Datos eliminados correctamente";
        }catch(PDOException $e) {
            echo "Error al eliminar los datos: ".$e->getMessage();
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

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function setContraseña($contraseña){
        $this->contraseña = $contraseña;
    }
    public function getContraseña() {
        return $this->contraseña;
    }
    

}
?>
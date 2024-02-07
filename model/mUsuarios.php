<?php
require_once("mPersona.php");

class mUsuarios extends mPersona
{
    private $cargo;
    private $contraseña;

    public function registrar()
    {

        try {
            $this->conexion()->query("INSERT INTO usuarios(nombre,cargo,contraseña) VALUES ('" . $this->getNombre() . "','" . $this->getCargo() . "','" . $this->getContraseña() . "')");

            $respuesta["mensaje"] = "Datos guardados correctamente";
            $respuesta["bol"] = true;
            $respuesta["error"] = "";

            echo json_encode($respuesta);

        } catch (PDOException $e) {
            $respuesta["mensaje"] = "Error al insertar datos";
            $respuesta["bol"] = false;
            $respuesta["error"] = "Error al insertar datos: {$e->getMessage()}";

            echo json_encode($respuesta);
        }

    }

    public function actualizar()
    {
        try {
            $this->conexion()->query("UPDATE usuarios set nombre='" . $this->getNombre() . "',cargo='" . $this->getCargo() . "',contraseña='" . $this->getcontraseña() . "' WHERE id='" . $this->getId() . "'");

            $respuesta["mensaje"] = "Datos actualizados correctamente";
            $respuesta["bol"] = true;
            $respuesta["error"] = "";

            echo json_encode($respuesta);

        } catch (PDOException $e) {
            $respuesta["mensaje"] = "Error al actualizar datos";
            $respuesta["bol"] = false;
            $respuesta["error"] = "Error al actualizar datos: {$e->getMessage()}";

            echo json_encode($respuesta);
        }

    }

    public function eliminar()
    {
        try {
            $this->conexion()->query("DELETE FROM usuarios WHERE id='" . $this->getId() . "'");
            
            $respuesta["mensaje"] = "Datos eliminados correctamente";
            $respuesta["bol"] = true;
            $respuesta["error"] = "";

            echo json_encode($respuesta);

        } catch (PDOException $e) {
            $respuesta["mensaje"] = "Error al eliminar datos";
            $respuesta["bol"] = false;
            $respuesta["error"] = "Error al eliminar datos: {$e->getMessage()}";

            echo json_encode($respuesta);
        }

    }



    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }
    public function getCargo()
    {
        return $this->cargo;
    }
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
    }
    public function getContraseña()
    {
        return $this->contraseña;
    }


}

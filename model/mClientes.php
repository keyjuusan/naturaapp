<?php
require_once("mPersona.php");

class mClientes extends mPersona
{
    public function registrar()
    {
        try {
            $cEnvio = $this->conexion()->query("INSERT INTO clientes(nombre,telefono,cedula) VALUES ('" . $this->getNombre() . "'," . $this->getTelefono() . "," . $this->getCedula() . ")");
            
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
            $cActualizo = $this->conexion()->query("UPDATE clientes set nombre='" . $this->getNombre() . "',cedula=" . $this->getCedula() . ",telefono=" . $this->getTelefono() . " WHERE id='" . $this->getId() . "'");

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
            $cElimino = $this->conexion()->query("DELETE FROM clientes WHERE id='" . $this->getId() . "'");
            
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
}
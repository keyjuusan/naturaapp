<?php
require_once("mPersona.php");

class mProveedores extends mPersona
{
    private $empresa;

    public function registrar()
    {
        try {
            $cInserto = $this->conexion()->query("INSERT INTO proveedores(id,empresa,telefono) VALUES (" . $this->getId() . ",'" . $this->getEmpresa() . "'," . $this->getTelefono() . ")");

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
            $cActualizo = $this->conexion()->query("UPDATE proveedores set empresa='" . $this->getempresa() . "',telefono=" . $this->getTelefono() . " WHERE id=" . $this->getId());

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
            $cElimino = $this->conexion()->query("DELETE FROM proveedores WHERE id='" . $this->getId() . "'");

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

    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }
    public function getEmpresa()
    {
        return $this->empresa;
    }


}
?>
<?php
require_once "mFactura.php";

class mCompras extends mFactura
{
    private $proveedorId;

    public function registrar()
    {

        try {
            $this->conexion()->query("INSERT INTO compras(descripcion,precio,fecha,hora,id_proveedor,id_empleado) VALUES ('" . $this->getDescripcion() . "'," . $this->getPrecio() . ",'" . $this->getFecha() . "','" . $this->getHora() . "'," . $this->getProveedorId() . "," . 1 . ")");

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
            $this->conexion()->query("UPDATE compras set descripcion='" . $this->getDescripcion() . "',precio='" . $this->getPrecio() . "',fecha='" . $this->getFecha() . "',hora='" . $this->getHora() . "',id_proveedor=" . $this->getProveedorId() . " WHERE id=" . $this->getId());

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
            $this->conexion()->query("DELETE FROM compras WHERE id='" . $this->getId() . "'");

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


    public function setProveedorId($proveedorId)
    {
        $this->proveedorId = $proveedorId;
    }

    public function getProveedorId()
    {
        return $this->proveedorId;
    }
}

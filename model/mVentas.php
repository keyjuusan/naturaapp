<?php
require_once "mFactura.php";

class mVentas extends mFactura
{
    private $clienteId;

    public function registrar()
    {

        try {
            $this->conexion()->query("INSERT INTO ventas(descripcion,precio,fecha,hora,id_cliente,id_producto,id_empleado) VALUES ('" . $this->getDescripcion() . "'," . $this->getPrecio() . ",'" . $this->getFecha() . "','" . $this->getHora() . "'," . $this->getClienteId() . "," . 1 . "," . 1 . ")");

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
            $this->conexion()->query("UPDATE ventas set descripcion='" . $this->getDescripcion() . "',precio='" . $this->getPrecio() . "',fecha='" . $this->getFecha() . "',hora='" . $this->getHora() . "',id_cliente=" . $this->getClienteId() . " WHERE id='" . $this->getId() . "'");

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
            $this->conexion()->query("DELETE FROM ventas WHERE id='" . $this->getId() . "'");

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

    public function setClienteId($clienteId)
    {
        $this->clienteId = $clienteId;
    }

    public function getClienteId()
    {
        return $this->clienteId;
    }
}

<?php
require_once "mFactura.php";

class mGastos extends mFactura
{
    private $categoria;

    public function registrar()
    {

        try {
            $this->conexion()->query("INSERT INTO gastos(descripcion,categoria,precio,fecha,hora,id_empleado) VALUES ('" . $this->getDescripcion() . "','" . $this->getCategoria() . "'," . $this->getPrecio() . ",'" . $this->getFecha() . "','" . $this->getHora() . "'," . 1 . ")");

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
            $this->conexion()->query("UPDATE gastos set descripcion='" . $this->getDescripcion() . "',categoria='" . $this->getCategoria() . "',precio=" . $this->getPrecio() . ",fecha='" . $this->getFecha() . "',hora='" . $this->getHora() . "' WHERE id='" . $this->getId() . "'");

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
            $this->conexion()->query("DELETE FROM gastos WHERE id='" . $this->getId() . "'");

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


    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }


}

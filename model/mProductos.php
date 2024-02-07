<?php
require_once("mConsultable.php");

class mproductos extends Consultable
{
    private $id;
    private $nombre;
    private $categoria;
    private $disponibles;
    private $descripcion;
    private $presentacion;
    private $precio;

    public function registrar()
    {
        try {
            $cEnvio = $this->conexion()->query("INSERT INTO productos(nombre,categoria,disponibles,descripcion,presentacion,precio) VALUES ('" . $this->getNombre() . "','" . $this->getCategoria() . "'," . $this->getDisponibles() . ",'" . $this->getDescripcion() . "','" . $this->getPresentacion() . "'," . $this->getPrecio() . ")");

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
            $cActualizo = $this->conexion()->query("UPDATE productos set nombre='" . $this->getNombre() . "', categoria='" . $this->getCategoria() . "', disponibles=" . $this->getDisponibles() . ", descripcion='" . $this->getDescripcion() . "', presentacion='" . $this->getPresentacion() . "', precio=" . $this->getPrecio() . " WHERE id=" . $this->getId());

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
            $cElimino = $this->conexion()->query("DELETE FROM productos WHERE id='" . $this->getId() . "'");

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

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getDisponibles()
    {
        return $this->disponibles;
    }

    public function setDisponibles($disponibles)
    {
        $this->disponibles = $disponibles;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getPresentacion()
    {
        return $this->presentacion;
    }

    public function setPresentacion($presentacion)
    {
        $this->presentacion = $presentacion;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
}
?>
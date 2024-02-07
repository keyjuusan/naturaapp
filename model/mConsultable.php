<?php
require_once "./model/mDataBase.php";
class Consultable extends mDataBase
{
    private $tabla;
    private $min = "";
    private $cantidad = "";

    public function consultar($tabla)
    {
        $this->setTabla($tabla);

        try {
            $consulta = ($this->getMin() != "") ?
                $this->conexion()->query("select * from {$tabla} LIMIT {$this->getCantidad()} OFFSET {$this->getMin()}")
                :
                $this->conexion()->query("select * from {$tabla}");

            echo json_encode($consulta->fetchAll());
        } catch (PDOException $e) {
            $respuesta["errorMsj"] = "Error al consultar la tabla " . $this->getTabla() . ": " . $e->getMessage();
            $respuesta["bool"] = false;

            echo json_encode($respuesta);
        }
    }

    public function getTabla()
    {
        return $this->tabla;
    }

    public function setTabla($tabla)
    {
        $this->tabla = $tabla;
    }

    public function getMin()
    {
        return $this->min;
    }

    public function setMin($min)
    {
        $this->min = $min;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
}
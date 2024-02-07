<?php
$producto = new mProductos();
$accion = $_POST["accion"];

switch ($accion) {
    case 'consultar':
        $producto->setMin($_POST["min"]);
        $producto->setCantidad($_POST["cantidad"]);
        $producto->consultar("productos");
        break;

    case 'registrar':
        $producto->setNombre($_POST["nombre"]);
        $producto->setCategoria($_POST["categoria"]);
        $producto->setDisponibles($_POST["disponibles"]);
        $producto->setDescripcion($_POST["descripcion"]);
        $producto->setPresentacion($_POST["presentacion"]);
        $producto->setPrecio($_POST["precio"]);
        $producto->registrar();
        break;

    case 'actualizar':
        $producto->setNombre($_POST["nombre"]);
        $producto->setId($_POST["id"]);
        $producto->setCategoria($_POST["categoria"]);
        $producto->setDisponibles($_POST["disponibles"]);
        $producto->setDescripcion($_POST["descripcion"]);
        $producto->setPresentacion($_POST["presentacion"]);
        $producto->setPrecio($_POST["precio"]);
        $producto->actualizar();
        break;

    case 'eliminar':
        $producto->setId($_POST["id"]);
        $producto->eliminar();
        break;

    default:
        # code...
        break;
}

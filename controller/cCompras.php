<?php
$compra = new mCompras();
$accion = $_POST["accion"];

switch ($accion) {
    case 'consultar':
        $compra->setMin($_POST["min"]);
        $compra->setCantidad($_POST["cantidad"]);
        $compra->consultar("compras");
        break;

    case "consultarProveedores":
        $compra->consultar("proveedores");
        break;
    case 'registrar':
        $horaCortada = substr($_POST["hora"], 0, 8);

        $compra->setDescripcion($_POST["descripcion"]);
        $compra->setPrecio($_POST["precio"]);
        $compra->setFecha($_POST["fecha"]);
        $compra->setHora($horaCortada);
        $compra->setProveedorId($_POST["proveedores"]);
        $compra->registrar();
        break;

    case 'actualizar':
        $compra->setId($_POST["id"]);
        $compra->setDescripcion($_POST["descripcion"]);
        $compra->setPrecio($_POST["precio"]);
        $compra->setFecha($_POST["fecha"]);
        $compra->setHora($_POST["hora"]);
        $compra->setProveedorId($_POST["proveedores"]);
        $compra->actualizar();
        break;

    case 'eliminar':
        $compra->setId($_POST["id"]);
        $compra->eliminar();
        break;

    default:
        # code...
        break;
}

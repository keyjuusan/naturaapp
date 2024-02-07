<?php
$venta = new mVentas();
$accion = $_POST["accion"];

switch ($accion) {
    case 'consultar':
        $venta->setMin($_POST["min"]);
        $venta->setCantidad($_POST["cantidad"]);
        $venta->consultar("ventas");
        break;

    case "consultarClientes":
        $venta->consultar("clientes");
        break;
        
    case 'registrar':
        $horaCortada = substr($_POST["hora"], 0, 8);

        $venta->setDescripcion($_POST["descripcion"]);
        $venta->setPrecio($_POST["costo"]);
        $venta->setFecha($_POST["fecha"]);
        $venta->setHora($horaCortada);
        $venta->setClienteId($_POST["clientes"]);
        $venta->registrar();
        break;

    case 'actualizar':
        $venta->setId($_POST["id"]);
        $venta->setDescripcion($_POST["descripcion"]);
        $venta->setPrecio($_POST["costo"]);
        $venta->setFecha($_POST["fecha"]);
        $venta->setHora($_POST["hora"]);
        $venta->setClienteId($_POST["clientes"]);
        $venta->actualizar();
        break;

    case 'eliminar':
        $venta->setId($_POST["id"]);
        $venta->eliminar();
        break;

    default:
        # code...
        break;
}

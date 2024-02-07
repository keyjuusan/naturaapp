<?php
$cliente = new mClientes();
$accion = $_POST["accion"];

switch ($accion) {
    case 'consultar':
        $cliente->setMin($_POST["min"]);
        $cliente->setCantidad($_POST["cantidad"]);
        $cliente->consultar("clientes");
        break;

    case 'registrar':
        $cliente->setNombre($_POST["nombre"]);
        $cliente->setCedula($_POST["cedula"]);
        $cliente->setTelefono($_POST["telefono"]);
        $cliente->registrar();
        break;

    case 'actualizar':
        $cliente->setNombre($_POST["nombre"]);
        $cliente->setId($_POST["id"]);
        $cliente->setCedula($_POST["cedula"]);
        $cliente->setTelefono($_POST["telefono"]);
        $cliente->actualizar();
        break;

    case 'eliminar':
        $cliente->setId($_POST["id"]);
        $cliente->eliminar();
        break;

    default:
        # code...
        break;
}

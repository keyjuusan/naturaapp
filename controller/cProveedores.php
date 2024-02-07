<?php
$proveedor = new mProveedores();
$accion = $_POST["accion"];

switch ($accion) {
    case 'consultar':
        $proveedor->setMin($_POST["min"]);
        $proveedor->setCantidad($_POST["cantidad"]);
        $proveedor->consultar("proveedores");
        break;

    case 'registrar':
        $proveedor->setEmpresa($_POST["empresa"]);
        $proveedor->setTelefono($_POST["telefono"]);
        $proveedor->registrar();
        break;

    case 'actualizar':
        $proveedor->setEmpresa($_POST["empresa"]);
        $proveedor->setId($_POST["id"]);
        $proveedor->setTelefono($_POST["telefono"]);
        $proveedor->actualizar();
        break;

    case 'eliminar':
        $proveedor->setId($_POST["id"]);
        $proveedor->eliminar();
        break;

    default:
        # code...
        break;
}

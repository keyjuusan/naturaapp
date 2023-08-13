<?php 
require_once("../model/mClientes.php");

$cliente = new mClientes();

$accion = $_POST["accion"];

switch ($accion) {
    case 'consultar':
        $cliente->consultar();
        break;

    case'registrar':
        $cliente->setNombre($_POST["nombre"]);
        $cliente->setCedula($_POST["cedula"]);
        $cliente->setTelefono($_POST["telefono"]);
        $cliente->registrar();
        break;

    case'actualizar':
        $cliente->setNombre($_POST["nombre"]);
        $cliente->setNombreAnterior($_POST["nombreAnterior"]);
        $cliente->setCedula($_POST["cedula"]);
        $cliente->setTelefono($_POST["telefono"]);
        $cliente->actualizar();
        break;

    case 'eliminar':
        $cliente->setNombre($_POST["nombre"]);
        $cliente->eliminar();
        break;
    
    default:
        # code...
        break;
}
?>
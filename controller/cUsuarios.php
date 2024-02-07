<?php
$usuario = new mUsuarios();
$accion = $_POST["accion"];

switch ($accion) {
    case 'consultar':
        $usuario->setMin($_POST["min"]);
        $usuario->setCantidad($_POST["cantidad"]);
        $usuario->consultar("usuarios");
        break;

    case 'registrar':
        $usuario->setNombre($_POST["nombre"]);
        $usuario->setCargo($_POST["cargo"]);
        $usuario->setContraseña($_POST["rcontraseña"]);
        $usuario->registrar();
        break;

    case 'actualizar':
        $usuario->setNombre($_POST["nombre"]);
        $usuario->setId($_POST["id"]);
        $usuario->setCargo($_POST["cargo"]);
        $usuario->setContraseña($_POST["rcontraseña"]);
        $usuario->actualizar();
        break;

    case 'eliminar':
        $usuario->setId($_POST["id"]);
        $usuario->eliminar();
        break;

    default:
        # code...
        break;
}

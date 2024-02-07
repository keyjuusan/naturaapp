<?php
$gasto = new mGastos();
$accion = $_POST["accion"];

switch ($accion) {
    case 'consultar':
        $gasto->setMin($_POST["min"]);
        $gasto->setCantidad($_POST["cantidad"]);
        $gasto->consultar("gastos");
        break;

    case 'registrar':
        $horaCortada = substr($_POST["hora"], 0, 8);

        $gasto->setDescripcion($_POST["descripcion"]);
        $gasto->setCategoria($_POST["categoria"]);
        $gasto->setPrecio($_POST["precio"]);
        $gasto->setFecha($_POST["fecha"]);
        $gasto->setHora($horaCortada);
        $gasto->registrar();
        break;

    case 'actualizar':
        $gasto->setId($_POST["id"]);
        $gasto->setDescripcion($_POST["descripcion"]);
        $gasto->setCategoria($_POST["categoria"]);
        $gasto->setPrecio($_POST["precio"]);
        $gasto->setFecha($_POST["fecha"]);
        $gasto->setHora($_POST["hora"]);
        $gasto->actualizar();
        break;

    case 'eliminar':
        $gasto->setId($_POST["id"]);
        $gasto->eliminar();
        break;

    default:
        # code...
        break;
}



<?php 

if(is_file("model/m".$pagina.".php")){
    require_once "model/m".$pagina.".php";
}else{
    echo "falta el modelo";
}

if(is_file("./view/vw".$pagina.".php")){

$cliente = new mClientes();

    if(!empty($_POST)){
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
    
        die;
    }
    require_once("./view/vw".$pagina.".php");

}else{
    echo "vista no encontrada";
}
?>
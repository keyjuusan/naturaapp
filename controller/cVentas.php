<?php 
if(is_file("model/m".$pagina.".php")){
    require_once "model/m".$pagina.".php";
}else{
    echo "falta el modelo";
}

if(is_file("./view/vw".$pagina.".php")){

    $venta = new mVentas();
    
    if(!empty($_POST)){
        require_once "./model/mClientes.php";
        $cliente = new mClientes();
        $accion = $_POST["accion"];
        
        switch ($accion) {
            case 'consultar':
                $venta->consultar();
                break;
            
            case "consultarClientes":
                $cliente->consultar();
                break;
            case'registrar':
                $horaCortada = substr($_POST["hora"],0,8);
        
                $venta->setDescripcion($_POST["descripcion"]);
                $venta->setPrecio($_POST["costo"]);
                $venta->setFecha($_POST["fecha"]);
                $venta->setHora($horaCortada);
                $venta->setClienteId($_POST["clientes"]);
                $venta->registrar();
                break;
        
            case'actualizar':
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
        
        die;
    }

    require_once("./view/vw".$pagina.".php");

}else{
    echo "vista no encontrada";
}

?>
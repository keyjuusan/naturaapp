<?php 
if(is_file("model/m".$pagina.".php")){
    require_once "model/m".$pagina.".php";
}else{
    echo "falta el modelo";
}

if(is_file("./view/vw".$pagina.".php")){

    $compra = new mCompras();
    
    if(!empty($_POST)){
        require_once "./model/mProveedores.php";
        $Proveedor = new mProveedores();
        $accion = $_POST["accion"];
        
        switch ($accion) {
            case 'consultar':
                $compra->consultar();
                break;
            
            case "consultarProveedores":
                $Proveedor->consultar();
                break;
            case'registrar':
                $horaCortada = substr($_POST["hora"],0,8);
        
                $compra->setDescripcion($_POST["descripcion"]);
                $compra->setCosto($_POST["costo"]);
                $compra->setFecha($_POST["fecha"]);
                $compra->setHora($horaCortada);
                $compra->setProveedorId($_POST["proveedores"]);
                $compra->registrar();
                break;
        
            case'actualizar':
                $compra->setId($_POST["id"]);
                $compra->setDescripcion($_POST["descripcion"]);
                $compra->setCosto($_POST["costo"]);
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
        
        die;
    }

    require_once("./view/vw".$pagina.".php");

}else{
    echo "vista no encontrada";
}

?>
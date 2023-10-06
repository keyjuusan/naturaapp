<?php 
if(is_file("model/m".$pagina.".php")){
    require_once "model/m".$pagina.".php";
}else{
    echo "falta el modelo";
}

if(is_file("./view/vw".$pagina.".php")){

    $producto = new mProductos();
    
    if(!empty($_POST)){
        $accion = $_POST["accion"];
        
        switch ($accion) {
            case 'consultar':
                $producto->consultar();
                break;
        
            case'registrar':
                $producto->setNombre($_POST["nombre"]);
                $producto->setCategoria($_POST["categoria"]);
                $producto->setCantidad($_POST["cantidad"]);
                $producto->setDescripcion($_POST["descripcion"]);
                $producto->setPresentacion($_POST["presentacion"]);
                $producto->setPrecio($_POST["precio"]);
                $producto->registrar();
                break;
        
            case'actualizar':
                $producto->setNombre($_POST["nombre"]);
                $producto->setId($_POST["id"]);
                $producto->setCategoria($_POST["categoria"]);
                $producto->setCantidad($_POST["cantidad"]);
                $producto->setDescripcion($_POST["descripcion"]);
                $producto->setPresentacion($_POST["presentacion"]);
                $producto->setPrecio($_POST["precio"]);
                $producto->actualizar();
                break;
        
            case 'eliminar':
                $producto->setId($_POST["id"]);
                $producto->eliminar();
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
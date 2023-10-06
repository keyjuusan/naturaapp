<?php 
if(is_file("model/m".$pagina.".php")){
    require_once "model/m".$pagina.".php";
}else{
    echo "falta el modelo";
}

if(is_file("./view/vw".$pagina.".php")){

    $proveedor = new mProveedores();
    
    if(!empty($_POST)){
        $accion = $_POST["accion"];
        
        switch ($accion) {
            case 'consultar':
                $proveedor->consultar();
                break;
        
            case'registrar':
                $proveedor->setCodigo($_POST["codigo"]);
                $proveedor->setEmpresa($_POST["empresa"]);
                $proveedor->setTelefono($_POST["telefono"]);
                $proveedor->registrar();
                break;
        
            case'actualizar':
                $proveedor->setEmpresa($_POST["empresa"]);
                $proveedor->setCodigo($_POST["codigo"]);
                $proveedor->setTelefono($_POST["telefono"]);
                $proveedor->actualizar();
                break;
        
            case 'eliminar':
                $proveedor->setCodigo($_POST["codigo"]);
                $proveedor->eliminar();
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
<?php 
if(is_file("model/m".$pagina.".php")){
    require_once "model/m".$pagina.".php";
}else{
    echo "falta el modelo";
}

if(is_file("./view/vw".$pagina.".php")){

    $usuario = new mUsuarios();
    
    if(!empty($_POST)){
        $accion = $_POST["accion"];
        
        switch ($accion) {
            case 'consultar':
                $usuario->consultar();
                break;
        
            case'registrar':
                $usuario->setNombre($_POST["nombre"]);
                $usuario->setCargo($_POST["cargo"]);
                $usuario->setContraseña($_POST["rcontraseña"]);
                $usuario->registrar();
                break;
        
            case'actualizar':
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

        die;
    }
    require_once("./view/vw".$pagina.".php");

}else{
    echo "vista no encontrada";
}

?>
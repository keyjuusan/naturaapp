<?php 
if(is_file("model/m".$pagina.".php")){
    require_once "model/m".$pagina.".php";
}else{
    echo "falta el modelo";
}

if(is_file("./view/vw".$pagina.".php")){

    $gasto = new mGastos();
    
    if(!empty($_POST)){
        
        $accion = $_POST["accion"];
        
        switch ($accion) {
            case 'consultar':
                $gasto->consultar();
                break;
            
            case'registrar':
                $horaCortada = substr($_POST["hora"],0,8);
        
                $gasto->setDescripcion($_POST["descripcion"]);
                $gasto->setCategoria($_POST["categoria"]);
                $gasto->setCosto($_POST["costo"]);
                $gasto->setFecha($_POST["fecha"]);
                $gasto->setHora($horaCortada);
                $gasto->registrar();
                break;
        
            case'actualizar':
                $gasto->setId($_POST["id"]);
                $gasto->setDescripcion($_POST["descripcion"]);
                $gasto->setCategoria($_POST["categoria"]);
                $gasto->setCosto($_POST["costo"]);
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
        
        die;
    }

    require_once("./view/vw".$pagina.".php");

}else{
    echo "vista no encontrada";
}

?>
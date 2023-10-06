
<?php
$pagina = "Principal";

if (!empty($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}

if(file_exists("./controller/c".$pagina.".php")){
    require("./controller/c".$pagina.".php");
}else{
    echo "error al traer el controlador al index";
}

?>
        
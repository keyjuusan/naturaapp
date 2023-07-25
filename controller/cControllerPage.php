<?php
    
    $pagina = "vwPrincipal";

        if (!empty($_GET['pagina'])){
               $pagina = $_GET['pagina'];
             }
            
        $url = "./view/" . $pagina . ".php";

    if (is_file($url)) {
        require_once($url);
    } else {
        echo "PAGINA EN CONSTRUCCIÓN";
    }
?>
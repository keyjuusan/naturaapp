<?php
    
    
        
    $url = "./view/vw" . $pagina . ".php";

    if (is_file($url)) {
        require_once($url);
    } else {
        echo "PAGINA EN CONSTRUCCIÓN";
    }
?>
<?php
$vistaSrc = "./view/vw" . $pagina . ".php";
$modeloSrc = "./model/m" . $pagina . ".php";
$moduloControladorSrc = "./controller/c" . $pagina . ".php";
$htmlSupSrc = "./components/superiorHtml.php";
$htmlInfSrc = "./components/inferiorHtml.php";

// Comprobar si No exite el archivo de la vista
if (!is_file($vistaSrc)) {
    echo "El archivo vista de " . $pagina . " no exite o la ruta esta errada";
    die;
}

if ($pagina !== "Principal") {
    // Comprobar si No exite el archivo del modelo
    if (!is_file($modeloSrc)) {
        echo "El archivo modelo de " . $pagina . " no exite o la ruta esta errada";
        die;
    }

    if (!is_file($moduloControladorSrc)) {
        echo "El archivo complementario del controlador " . $pagina . " no exite o la ruta esta errada";
        die;
    }

    // Por aca SOLO pasan las peticiones http post(en caso de que se reciba una)
    if (!empty($_POST["accion"])) {
        // ACA VA LA IMPLEMENTACION DEL MODELO
        require_once $modeloSrc;

        // Aqui va el llamado del archivo que contiene la implementacion del uso del modelo.
        require_once $moduloControladorSrc;

        die;
    } else {
        // Por ultimo se llama a la vista
        if (!is_file($htmlSupSrc)) {
            echo "El archivo de la estructura superior del html no exite o la ruta esta errada";
        }

        if (!is_file($htmlInfSrc)) {
            echo "El archivo de la estructura inferior del html no exite o la ruta esta errada";
        }

        require_once $htmlSupSrc;
        require_once $vistaSrc;
        require_once $htmlInfSrc;
    }

} else {
    // Por ultimo se llama a la vista
    if (!is_file($htmlSupSrc)) {
        echo "El archivo de la estructura superior del html no exite o la ruta esta errada";
    }

    if (!is_file($htmlInfSrc)) {
        echo "El archivo de la estructura inferior del html no exite o la ruta esta errada";
    }

    require_once $htmlSupSrc;
    require_once $vistaSrc;
    require_once $htmlInfSrc;
}




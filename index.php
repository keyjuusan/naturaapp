<?php

$pagina = empty($_GET['pagina']) ? "Principal" : $_GET['pagina'];

if (file_exists("./controller/cGeneral.php")) {
    require("./controller/cGeneral.php");
} else {
    echo "error al traer el controlador al index";
}

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./src/js/jquery.js"></script>
    <link rel="shortcut icon" href="./src/assets/img/undraw_nature_m5ll.svg" type="image/x-icon">
    <link href="./src/css/index.css" rel="stylesheet">
    <title>
        <?php echo $pagina ?>
    </title>
</head>

<body class="vh-100">
    <div class="d-flex flex-lg-row flex-column bg-light-apple h-100">
        <?php
        require("./components/menuSup.php");
        require("./components/menuIzq.php");
        ?>

        <div id="vwBody" class="d-flex flex-column w-100 container h-100 gap-3 pt-4 align-items-center"
            style="overflow: auto;">
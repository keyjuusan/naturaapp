<!DOCTYPE html>
<html lang="es" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./src/js/bootstrap.bundle.min.js"></script>
    <script src="./src/js/jquery.js"></script>
    <link rel="shortcut icon" href="./img/undraw_nature_m5ll.svg" type="image/x-icon">
    <link href="./src/css/styles.css" rel="stylesheet">
    <title>Natura App</title>
</head>

<body class="vh-100" >
    <div class="d-flex flex-lg-row flex-column bg-light-apple h-100">
        <?php
        include("./comunes/menuSup.php");
        include("./comunes/menuIzq.php");
        include("./controller/cControllerPage.php");
        include("./comunes/menuSub.php")
        ?>
    </div>
</body>

</html>
<?php  
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();
    
    include("conexion/index.php"); 

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DLS EATS</title>
    <link rel = "icon" href = "https://cdn-icons.flaticon.com/png/512/4058/premium/4058726.png?token=exp=1654187194~hmac=d14ccd3b52af81bf77396e3084a27499" type = "image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS personalizado -->
    <link href="./css/index.css" rel="stylesheet">
    
</head>
<body class="dark-background text-whity scroll">
    
<?php
        $seccion = (isset($_GET['seccion']) && $_GET['seccion'] != '') ? $_GET['seccion'] : 'inicio';
        $accion = (isset($_GET['accion']) && $_GET['accion'] != '') ? $_GET['accion'] : 'lista';
        include("menu/index.php");
        ?>
        <div class="container">
        <?php
        switch ($seccion) {
            case "inicio":
                include("inicio/index.php");
                include("productos/lista.php");
                break;
            case "aviso":
                include("aviso/index.php");
                break;
            case "terminos":
                include("terminos/index.php");
                break;
            case "acceso":
                include("acceso/index.php");
                break;
        }
 
        include("piedepagina/index.php");

    ?>
</div>
    
</body>
</html>
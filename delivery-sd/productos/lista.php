<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DLS EATS</title>
    <link rel = "icon" href = "https://cdn-icons.flaticon.com/png/512/4058/premium/4058726.png?token=exp=1654187194~hmac=d14ccd3b52af81bf77396e3084a27499" type = "image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS personalizado -->
    <link href="../css/index.css" rel="stylesheet">
    
</head>
<body>
<br>
<br>
<h2>NUESTROS PRODUCTOS</h2>
<br>
<div class="">
<?php
        $consulta  = " SELECT * FROM tb_productos";
        $query = $conn->prepare($consulta);
        $query->execute();
        while($registro = $query->fetch()) {
            include("productos/tarjeta.php");
        }
    ?>
</div>
<br>

</body>
</html>
 
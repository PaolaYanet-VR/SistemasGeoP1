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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
	<a class="navbar-brand" href="?seccion=inicio">
		<img width="75" height="75" class="d-inline-block align-text-top m-3" src="https://cdn-icons.flaticon.com/png/512/4058/premium/4058820.png?token=exp=1654238758~hmac=ac5231fe103ef89a2e34090d9141d713" type = "image/x-icon">
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse position-absolute top-50 start-50 translate-middle" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item m-3">
			    <a class="text-nav nav-link active" href="?seccion=inicio">Inicio</a>
        </li>
        <li class="nav-item m-3">
          <a class="text-nav nav-link" href="#">Promociones</a>
        </li>
        <li class="nav-item m-3">
          <a class="text-nav nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item m-3">
          <a class="text-nav nav-link" href="#">Mis pedidos</a>
        </li>
		<?php
		if(!isset($_SESSION["id"])) 
		{
		?>
        <li class="nav-item m-3">
			<a class="text-nav nav-link" href="?seccion=acceso">Ingresar</a>
        </li>
		<?php
		}
		?>
		<?php
		if(isset($_SESSION["id"])) 
		{
		?>
        <li class="nav-item m-3">
			<a class="text-nav nav-link" href="?seccion=acceso&accion=micuenta">Mi cuenta</a>
        </li>
        <li class="nav-item m-3">
			<a class="text-nav nav-link" href="?seccion=acceso&accion=salir">Salir</a>
        </li>
		<?php
		}
		?>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
 
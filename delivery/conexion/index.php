<?php

    $usuario = "sistemasgeo5452_pvillaadm";
    $contrasena = "F^FY3,g3J0[5+oA6Ku";
    try {
        $conn = new PDO('mysql:host=localhost;dbname=sistemasgeo5452_delivery',
         $usuario, $contrasena);
         $conn -> setAttribute(PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "ERROR: " . $e -> getMessage();
    }

?>
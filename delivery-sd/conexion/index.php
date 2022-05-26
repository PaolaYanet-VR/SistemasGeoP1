<?php

	$usuario    = "pvillaadm";
	$contrasena = "F^FY3,g3J0[5+oA6Ku";
	try{
    	$conn = new PDO('mysql:host=localhost;dbname=pvilla2', $usuario, $contrasena);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	}
		catch(PDOException $e)
			{
    			echo "ERROR: " . $e->getMessage();
			}
?>
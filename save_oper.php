<?php

include("conexion.php");

	$name = $_POST['name'];
	$short_des = $_POST['short_des'];
	$long_des = $_POST['long_des'];

	$query="INSERT INTO productsinfo(name,short_description,long_description) 
	VALUES('$name','$short_des','$long_des')";
	$resultado=$connection->query($query);

	if($resultado){
		header("Location: tabe.php");
	}
	else {
		echo "ERROR 404 YOU HAVE BEEN CORRUPTED";
	}
?>



<?php

include("conexion.php");


	$id=$_REQUEST['id'];
	$name = $_POST['name'];
	$short_des = $_POST['short_des'];   
	$long_des = $_POST['long_des'];

	$query="UPDATE productsinfo SET name='$name', short_description='$short_des', long_description='$long_des' WHERE id='$id' ";
	$resultado=$connection->query($query);

	if($resultado){
		header("Location: tabe.php");
	}
	else {
		echo "ERROR 404 YOU HAVE BEEN CORRUPTED";
	}
?>

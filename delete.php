<?php

include("conexion.php");  #This makes connection with the connection file

	$id=$_REQUEST['id'];  #Here the 

	$query="DELETE FROM productsinfo WHERE id='$id'";  #Delete that from the table
	$resultado=$connection->query($query);

	if($resultado){
		header("Location: tabe.php");   #If the result makes the connection go to the table file
	}
	else{
		echo "ERROR 404 YOU HAVE BEEN CORRUPTED"; #If not, print this
	}
?>
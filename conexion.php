<?php
	
	$host='localhost';   #Values of my database
	$user='root';
	$password='';
	$db='products';

	$connection=@mysqli_connect($host,$user,$password,$db);
	/* I put it because then it show this text and the other one of the save_ope the inserion nice or the other of else
	if($connection){
		echo "Successfull connection";
	}
	else{
		echo "error in the connection";
	}
*/
?>
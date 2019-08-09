<!DOCTYPE html>
<html>
<head>
	<title>Save</title>
</head>
<body>
	<center>
			<?php

				$id=$_REQUEST['id'];  #Here we request the id, it will act only with the id asked

				include("conexion.php");

				$query="SELECT * FROM productsinfo WHERE id='$id'";
				$resultado=$connection->query($query);  #This will select the things from the table where the id is asked
				$row=$resultado->fetch_assoc();
			?>
		<form action="modify_oper.php?id=<?php echo $row['id']; ?>" method="POST">

			<br/><br/><br/>
			<input type="text" REQUIRED name="name" placeholder="Name" value="<?php echo $row['name']; ?>" /><br/><br/>
			<input type="text" REQUIRED name="short_des" placeholder="Short Description" value="<?php echo $row['short_description']; ?>" /><br/><br/>
			<input type="text" REQUIRED name="long_des" placeholder="Long Description" value="<?php echo $row['long_description']; ?>" /><br/><br/>
			<input type="submit" name="submit" value="Submit" />
		</form>
	</center>
</body>
</html>
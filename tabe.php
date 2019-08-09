<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
	<center>
		<table bgcolor="yellow" border="12"> <!--This puts the color of the table and the outside borders size-->
			<thead>
				<tr>
					<th><a href="formulario.php">New product</a></th> <!--This makes the connection with the formulario file and prints the new product column-->
					<th colspan="4">Catalogue of products</th>  <!--With colspan we choose the number of columns that the "Catalogue of products will have"-->
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Name</td>  <!--Column named "Name"-->
					<td>Short Desciption</td> <!--Column named "Short Description"-->
					<td>Long Description</td> <!--Column named "Long Description"-->
					<td colspan="2">Operations</td> <!--Column named "Operations"-->
				</tr>
			<?php
				include("conexion.php");  #This makes the connection with the database by using the conexion.php file
				$query="SELECT * FROM productsinfo";  #Variable called query that makes a query 
				$resultado=$connection->query($query);  #Variable called resultado that if there is connection makes the query
				while($row=$resultado->fetch_assoc()){   #It returns an associative string array representing the row obtained from the resultset, where each key in the matrix corresponds to the name of one of its columns
			?>
				<tr>
					
					<td><?php echo $row['name']; ?></td>  <!-- This prints the value of the row name -->
					<td><?php echo $row['short_description']; ?></td> <!-- This prints the value of the row short_description -->
					<td><?php echo $row['long_description']; ?></td> <!-- This prints the value of the row long_description -->
					<td><a href="modify.php?id=<?php echo $row['id']; ?>">Modify</a></td>  <!-- This executes the button modify by going to the modify.php file -->
					<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> <!-- This executes the button delete by going to the delete.php file -->
				</tr>	
				
			<?php
				}
			?>
			</tbody>
		</table>
	</center>
</body>
</html>
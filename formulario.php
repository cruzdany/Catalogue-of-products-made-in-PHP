<!DOCTYPE html>
<html>
<head>
	<title>Save</title>
</head>
<body>   <<!--All this is shown on the first page and those values will be saved-->
	<center>
		<form action="save_oper.php" method="POST">
			<br/><br/><br/>
			<!--<input type="text" REQUIRED name="id" placeholder="ID" value="" /><br/><br/>-->
			<input type="text" REQUIRED name="name" placeholder="Name" value="" /><br/><br/>
			<input type="text" REQUIRED name="short_des" placeholder="Short Description" value="" /><br/><br/>
			<input type="text" REQUIRED name="long_des" placeholder="Long Description" value="" /><br/><br/>
			<input type="submit" name="submit" value="Submit" />

		</form>
	</center>

</body>
</html>
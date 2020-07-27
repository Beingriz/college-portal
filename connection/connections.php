<!DOCTYPE html>
<html>
<head>
	<title>connection-to-databse</title>
</head>
<body>

	<?php 
		$servername = "localhost";
		$database ="root";
		$databasename ="College_portal";
		$password="";
		$conn = mysqli_connect($servername,$database, $password , $databasename);
		
  	?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>connection-to-databse</title>
</head>
<body>

	<?php 
		$servername = "localhost";
		$database ="root";
		$databasename ="mydemo";
		$password="";
		$con = mysqli_connect($servername,$database, $password , $databasename);
		fi($con)
		{
			echo "sucessfully connected to Datatbase ";
		}
		else
		{
			echo "Failed to connect";
		}
  	?>
</body>
</html>
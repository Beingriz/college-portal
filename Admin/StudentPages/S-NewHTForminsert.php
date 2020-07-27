<!DOCTYPE html>
<html>
<head>
	<title>issue Hallticket </title>
</head>
<body>
<?php
$host="localhost";
$user="root";
$pw = "";
$db="college_portal";
$conn = mysqli_connect($host,$user,$pw,$db);

$id=$_GET['id'];
$file=$_GET['upload'];
$filename = $_FILES["$file"]["name"];
  $tempname = $_FILES["$file"]["tmp_name"];
  $folder = "Hallticket/".$filename;
  move_uploaded_file($tempname, $folder);


$new_ht="update student_reg set HT_Path='$folder' where Register_No='$id'";
$sql = mysqli_query($conn, $new_ht);
echo "ins";

?>
</body>
</html>
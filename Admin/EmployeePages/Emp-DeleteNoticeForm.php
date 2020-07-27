
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Update</title>
    <link rel="stylesheet" type="text/css" herf="./css/7-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body >
  <?php
  $host = "localhost";
   $user = "root";
   $pw = "";
   $db = "College_portal";
   $conn = mysqli_connect($host , $user , $pw , $db);
  $Noticeid = $_GET['id'];
  $delete = "Delete from staff_notice_box where Notice_ID='$Noticeid'";
  $sql = mysqli_query($conn, $delete);
  echo '<script type="text/javascript">window.location = \'M-Emp-Notice.php\';</script>'
?>

</body>
</html> 
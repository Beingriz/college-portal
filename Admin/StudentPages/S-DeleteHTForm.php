
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Hall Ticket</title>
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
  $ht_id = $_GET['id'];
  $result_course = $_GET['Course'];
  $result_year = $_GET['Year'];
  $result_sem = $_GET['id2'];

  $delete = "Delete from hall_ticekts where HT_ID ='$ht_id'";
  $result_delete =  "Update student_reg set   HT_Path = 'NO Hall Ticket' Where Classs = '$result_course' && Year = '$result_year' &&  Semister ='$result_sem' ";

  $sql_delete = mysqli_query($conn, $delete);   $sql_st_delete = mysqli_query($conn, $result_delete);
  if($sql_delete && $sql_st_delete )
  {
     echo '<script type="text/javascript">window.location=\'NewHT.php\';</script>';
  }
  
  else
  {
     echo '<script type="text/javascript">alert("unable to delete! ...")window.location=\'NewHT.php\';</script>';
  }
  ?>
</body>
</html>
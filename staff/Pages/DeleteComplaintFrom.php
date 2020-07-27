
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Old Complaints</title>
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
  $cmp_id = $_GET['id'];

  $delete = "Delete from Complaint where CMP_ID ='$cmp_id'";

  $sql_delete = mysqli_query($conn, $delete);   
  if($sql_delete)
  {
     echo '<script type="text/javascript">window.location=\'ViewComplaint.php\';</script>';
  }
   else
  {
     echo '<script type="text/javascript">alert("Error! Please Try Again ...");</script>';
  }
  ?>
</body>
</html>
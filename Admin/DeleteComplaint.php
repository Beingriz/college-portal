
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Old Complaints</title>
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
     $cmpid = $_GET['id'];
  $retrive = "delete from Complaint where CMP_ID='$cmpid'";
  $sql = mysqli_query($conn, $retrive);
  if($sql)
  {
    echo'<script type=text/javascript>window.location=\'ViewComplaint.php\';</script>';
  }
else
{
    echo'<script type=text/javascript>alert("Sorry Unable to Delete Complaint. Please Try Again");</script>';
}
  ?>
</body>
</html>

<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Student</title>
    <link rel="stylesheet" type="text/css" herf="./css/7-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
  label {color: black; text-shadow: none;}
  button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
.border .form h1{
  margin-left: -60%; margin-top: 15px; font-family: serif; color: mediumseagreen;  text-shadow: none; font-size: 30px;
}
.tab{
	display: none; 
}
.border .form img{ width: 65px; height: 75px;    }
.border .form input[type="text"]{padding: 5px;  }
</style>
<body >
<!-- Main -->
<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "College_portal";
$conn = mysqli_connect($host , $user , $pw , $db);
 $regid = $_GET['reg_id'];

  // Specify the query to Insert Record
   $sql1 = "DELETE from student_reg where Register_No='$regid'";
    $student = mysqli_query($conn, $sql1);  

   $sql2 = "DELETE from student_parent where Register_No='$regid'";
    $student = mysqli_query($conn, $sql2);  

    $sql3 = "DELETE from login1 where User_name = '$regid'";
    $login = mysqli_query($conn, $sql3);

    $edu = "DELETE from student_fee where Register_No = '$regid'";
  $education = mysqli_query($conn, $edu);

     echo '<script type="text/javascript">window.location=\'../M-SearchStudent.php\';</script>';



?>

?>
     
    </div>
 </div> <!-- /main -->

</body>
</html>
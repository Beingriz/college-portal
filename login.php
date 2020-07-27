<?php 
include('./Temp/css.php');
session_start(); 

$host="localhost";
$user="root";
$Password="";
$db="College_portal";

$conn = mysqli_connect($host,$user, $Password,$db);
if(isset($_POST['submit']))
{
  $uname=$_POST['username'];
  $Pswd=$_POST['Password'];
  $ustype =$_POST['usertype'];
  if($ustype=="--select--")
      {
        echo '<script type="text/javascript">alert("Please Select User Type");window.location=\'index.php\';</script>';
      }
      
      elseif($ustype=="Admin")
      {
            $query1 = "select * from Login1 where User_name='$uname' && Password='$Pswd' && User_type='$ustype' && CPW_Count='0'";
            $result1 = mysqli_query($conn,$query1);
            $total1 = mysqli_num_rows($result1);

            $query = "select * from Login1 where User_name='$uname' && Password='$Pswd' && User_type='$ustype' && CPW_Count='1'";
            $result = mysqli_query($conn,$query);
            $total = mysqli_num_rows($result);
                if ($total1==0 && $total==0)
                {
                    echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
                }

                elseif($total!=0)
                {
                    $_SESSION['User_name']=   $uname;
                    header("location:http://localhost/College/Admin/M-Admin-Home.php");
                } 
                else
                {
                    $_SESSION['User_name']=   $uname;
                    header("location:http://localhost/College/Admin/AdminProfileCP.php");
                } 
                mysqli_close($conn);
      }
           
          elseif($ustype=="Staff")
            {
            $query1 = "select * from Login1 where User_name='$uname' && Password='$Pswd' && User_type='$ustype' && CPW_Count='0'";
            $result1 = mysqli_query($conn,$query1);
            $total1 = mysqli_num_rows($result1);

            $query = "select * from Login1 where User_name='$uname' && Password='$Pswd' && User_type='$ustype' && CPW_Count='1'";
            $result = mysqli_query($conn,$query);
            $total = mysqli_num_rows($result);
                if ($total1==0 && $total==0)
                {
                    echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
                }

                elseif($total!=0)
                {
                    $_SESSION['User_name']=   $uname;
                    header("location:http://localhost/College/Staff/M-Staff-Home.php");
                } 
                else
                {
                    $_SESSION['User_name']=   $uname;
                    header("location:http://localhost/College/Staff/ChangePassword.php");
                } 
                mysqli_close($conn);
            }
            elseif($ustype=="Student")
            {
            $query1 = "select * from Login1 where User_name='$uname' && Password='$Pswd' && User_type='$ustype' && CPW_Count='0'";
            $result1 = mysqli_query($conn,$query1);
            $total1 = mysqli_num_rows($result1);

            $query = "select * from Login1 where User_name='$uname' && Password='$Pswd' && User_type='$ustype' && CPW_Count='1'";
            $result = mysqli_query($conn,$query);
            $total = mysqli_num_rows($result);
                if ($total1==0 && $total==0)
                {
                    echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
                }

                elseif($total!=0)
                {
                    $_SESSION['User_name']=   $uname;
                    header("location:http://localhost/College/Student/M-Student-Home.php");
                } 
                else
                {
                    $_SESSION['User_name']=   $uname;
                    header("location:http://localhost/College/Student/Student-ProfileCP.php");
                } 
                mysqli_close($conn);
            }
  }
   
 ?>



<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Change Password</title>
    <link rel="stylesheet" type="text/css" herf="./css/7-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
  label {color: black;}
  button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">
               
                
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <table style="border: none;" width="100%" border="0" cellspacing="0" cellpadding="0">

                    <tr>
                          <td><span id="sprytextfield1">
                          <input style="width: 100%" type="text" name="username" placeholder="Username..."></span>
                      </td>
                    </tr>
                    <tr>
                      
                      <td><span id="sprytextfield2">
                      <input style="width: 100%" type="Password" name="Password" placeholder="Password...">
                      </span></td>
                    </tr>
                    <tr>
                       <td><select style="width: 100%" class="dropdown-menue" name="usertype">
                            <option name="User" value="--select--">User Type</option>
                            <option name="User" value="Admin">Admin</option>
                            <option name="User" value="Staff">Staff</option>
                            <option name="User" value="Student">Student</option>
                          </select></td>
                    </tr>
                    <tr>
                    <td>
                      <div style="position: relative; margin-top: 30px;  float: left;" align="center">
                          <button style="margin-top:-15px; width:130%;" name="submit">Login</button>
                    </div>
                  </td>
                 <tr>                
                  <td><a href="registration.php">Register Admin</a></td>
                </tr>
                <tr>
                    <td><a href="ForgotPassword.php">Forgot Password?</a></td>
                </tr>        
          </table>
      </form>
    </div>
 </div> <!-- /main -->
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
            [ 
              [//Old Password 
              ["minlen=1",  "Enter User Name"              ] ],
              [//New Password
              ["minlen=1",    "Please Enter Password Password"    ] ] ];
              
</SCRIPT>
<script type="text/javascript">
<!--

var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");


//-->
</script>
</body>
</html>

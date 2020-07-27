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
 
 		if($ustype=="Admin")
 			{
         		$query = "select * from Login1 where User_name='$uname' && Password='$Pswd' && User_type='$ustype'";
         		$result = mysqli_query($conn,$query);
        		$total = mysqli_num_rows($result);
          			if ($total==0)
                {
                    echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
                }
                else
                {
                    $_SESSION['User_name']=   $uname;
                    header("location:http://localhost/College/Admin/M-Admin-Home.php");
                } 
                mysqli_close($conn);
      }
          	elseif($ustype=="Staff")
 			      {
         		$query = "select * from Login1 where User_name='$uname' && Password='$Pswd' && User_type='$ustype'";
         		$result = mysqli_query($conn,$query);
        		$total = mysqli_num_rows($result);
          			if ($total==0)
                {
                    echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
                }
                else
                {
                    $_SESSION['User_name']=   $uname;
                    header("location:http://localhost/College/Staff/M-Staff-Home.php");
                } 
                mysqli_close($conn);
            }
            elseif($ustype=="Student")
 			      {
         		$query = "select * from Login1 where User_name='$uname' && Password='$Pswd' && User_type='$ustype'";
         		$result = mysqli_query($conn,$query);
        		$total = mysqli_num_rows($result);
          			if ($total==0)
                {
                    echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
                }
                else
                {
                    $_SESSION['User_name']=   $uname;
                    header("location:http://localhost/College/student/M-Home.php");
                } 
                mysqli_close($conn);
            }
  }
   
 ?>

<!DOCTYPE html>
<html>
<title>Login</title>
<meta name="viewport" content="width=device-width, intial-scale 0.1">


<body>
<div class="border">5
  <div class="form">
    <form  method="POST">
     <h1 style="margin-top: -5px; margin-bottom: 15px;">Login</h1>
     
     	<tr>
        <td><input style="width: 100%" type="text" name="username" placeholder="Username..."></td>
        </tr>
        
        <td><input style="width: 100%" type="text" name="Password" placeholder="Password..."></td>
    </tr>
    <tr>
    
    <td><select style="width: 100%" class="dropdown-menue" name="usertype">
          <option name="User" value="--select--">User Type</option>
          <option name="User" value="Admin">Admin</option>
          <option name="User" value="Staff">Staff</option>
          <option name="User" value="Student">Student</option>
        </select></td>
       </tr>
       <tr><td><button style="margin-top:10px;width: 50%" name="submit">Login</button></td></tr>
       <tr> <td><p><a href="registration.php">Forgot Password??</a></p></td>
    </tr>

    </form>
</div>
</div>
</body>
</html>



 
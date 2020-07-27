<?php
if(!$_SESSION)
{
  session_start();
}
$host = "localhost";
$user = "root";
$pw = "";
$db = "college_portal";

$conn = mysqli_connect($host , $user , $pw ,$db);
if(isset($_POST['submit']))
{ 
  $user_id = $_SESSION['User_name'];
  $opw = $_POST['txt_emp_opw'];
  $npw = $_POST['txt_emp_npw'];
  $cpw = $_POST['txt_emp_cpw'];
  if($npw == $cpw)
  {
     $query = "select * From  Login1 where  User_name='".$user_id."' && Password = '".$opw."' " ;
            $result = mysqli_query($conn,$query);
            $rec = mysqli_num_rows($result);
            if($rec==0)
            {
               echo '<script type="text/javascript">alert("Incorrect Old Password!!!.. ");</script>';

            }
           
            else
            {
               $sql = "UPDATE login1 SET password='".$cpw."' , CPW_Count='1' WHERE User_name= '".$user_id."' ";
                    $data = mysqli_query($conn,$sql);
                    if(!$data)
                    {
                      echo '<script type="text/javascript">alert("update is not working ");</script>';
                    }
                    else
                    {
                    echo '<script type="text/javascript">alert("Congratulation!!!Your Password  is Changed!... Please Login Now");window.location=\'logout.php\';</script>';

                     }

            }               
  }
  else
  {
     echo '<script type="text/javascript">alert("New  & Confirm Password are Not Same!.... ");</script>';
  }
    mysqli_close($conn);
  
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
  label {color: black; text-shadow: none;}
  button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">
               <h1 style="margin-left: -60%; margin-top: 15px; text-shadow: none; font-family: serif;">Change Password</h1>
                <input type="hidden" name="emp_regid"  id="emp_regid" value=""/>
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <table width="70%" border="0" cellspacing="0" cellpadding="0">

                    <tr>
                      <td><label>Enter Old Passwrd :</label></td>
                      <td><span id="sprytextfield1">
                          <input type="text" name="txt_emp_opw" id="txt_emp_opw" placeholder="Old Password"></span>
                      </td>
                    </tr>
                    <tr>
                      <td><label>Enter New Password :</label></td>
                      <td><span id="sprytextfield2">
                      <input type="password" name="txt_emp_npw" id="txt_emp_npw" placeholder="New Password" />
                      </span></td>
                    </tr>
                    <tr>
                      <<td><label>Enter Confirm Password :</label></td>
                      <td><span id="sprytextfield3">
                      <input type="password" name="txt_emp_cpw" id="txt_emp_cpw" placeholder="New Password" />
                      </span></td>
                    </tr>
                    <td><div style="position: relative; margin-top: 50px; margin-left: 0px;  float: left;" align="center">
                    <button align="center" type="submit" name="submit">Change Password</button>
                    </div>
                  </td>
                    
          </table>
      </form>
    </div>
 </div> <!-- /main -->
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
            [ 
              [//Old Password 
              ["minlen=1",  "Please Old Password"              ] ],
              [//New Password
              ["minlen=5",    "Please Enter New Password"    ] ],

              [//Confirm Password
              ["minlen=5",    "Please Enter Confirm Password"           ] ] ];
              
</SCRIPT>
<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");


//-->
</script>
</body>
</html>


<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Notice Update</title>
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
  <?php
  $host = "localhost";
   $user = "root";
   $pw = "";
   $db = "College_portal";
   $conn = mysqli_connect($host , $user , $pw , $db);
  $Noticeid = $_GET['id'];
  $retrive = "Select * from student_notice_box where Notice_ID='$Noticeid'";
  $sql = mysqli_query($conn, $retrive);
  $row = mysqli_num_rows($sql);
  $field = mysqli_fetch_assoc($sql);
  ?>
<!-- Main -->
<div class="border">
    <div class="form">
      <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">

          <table width="50%" border="0" cellspacing="0" cellpadding="0">
            <h1>Update Student Notice </h1>
                    <tr>
                      <td><label >Notice Id</label></td>
                      <td><label  style="color: red;"><?php echo $field['Notice_ID'];?></label></td>
                      <td><input type="hidden" name="txt_notice_id" id="txt_notice_id" value=" <?php echo $field['Notice_ID'];?> "></td>
                    </tr>

                    <tr>
                      <td><label >Notice Date</label></td>
                      <td><label  style="color: red;"><?php echo $field['Notice_Date']?></label></td>
                    </tr>
                    <tr>
                      <td><label>Title</label></td>
                      <td><span id="sprytextfield1">
                          <input type="text" name="txt_emp_title" id="txt_emp_title" value=" <?php echo $field['Title'];?> "></span>
                      </td>
                    </tr>
                    <tr>
                      <td><label>Subject</label></td>
                      <td><span id="sprytextfield2">
                      <input type="text" name="txt_emp_tsub" id="txt_emp_tsub" value=" <?php echo $field['Subject'];?> " />
                      </span></td>
                    </tr>
                    
                    <tr>
                      <td><label>Description</label></td>
                     <td><span id="sprytextfield3">
                      <input type="text" name="txt_emp_tdesc" id="txt_emp_tdesc" value=" <?php echo $field['Description'];?> " />
                      </span></td>
                    </tr>
                    <td><div style="position: relative; margin-top: 0px; margin-left: 100px;  float: left;" align="center">
                    <button align="center" type="submit" name="Update">Update Notice</button>
                    </div>
                  </td>

                  <td><div style="position: relative; margin-top: 0px; margin-left: 100px;  float: left;" align="center">
                    <button align="center" type="submit" name="Edit">Delete Notice</button>
                    </div>
                  </td>
              </table>





</form>
<?php
 if(isset($_POST['Update']))
  {


    $Id=$_POST['txt_notice_id'];
    $title=$_POST['txt_emp_title'];
    $subject =$_POST['txt_emp_tsub'];
    $desc = $_POST['txt_emp_tdesc'];

    if($Id!="" && $title!="" && $subject!="" && $desc!="")
    {
// Specify the query to execute
      $sql = "update student_notice_box Set Title='$title', Subject='$subject', Description = '$desc' where Notice_ID ='$Noticeid' ";
// Execute query
       $result = mysqli_query($conn,$sql);
        if($result)
        {
            echo '<script type="text/javascript"> alert(" Notice Updated Successfully!... ");window.location=\'M-S-Notice.php\';</script>';

        }
        else
        {
            echo '<script type="text/javascript"> alert("Unable to Update Notice ")</script>';

        }
    }
  }
?>
</table>
</form>
    
    </div>
 </div> <!-- /main -->
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
            [ 
              [//Old Password 
              ["minlen=",  "Please Enter Staff ID "    ] ],
              [//New Password
              ["minlen=",    "Please Enter Name"    ] ] ];
              
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
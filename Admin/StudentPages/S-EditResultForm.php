
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
  $result_id = $_GET['id'];
  $retrive = "Select * from result where Result_ID ='$result_id'";
  $sql = mysqli_query($conn, $retrive);
  $row = mysqli_num_rows($sql);
  $field = mysqli_fetch_assoc($sql);
  ?>
<!-- Main -->
<div class="border">
    <div class="form">
          <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
            <h1>Edit Result</h1>
                 <table width="70%" border="0" cellspacing="20" cellpadding="0">
                    <tr>
                      <td><label >ID</label>
                      <label  style="color: green;"><?php echo $result_id; ?></label></td>
                      <td><label >Date</label>
                      <label  style="color: green;"><?php echo $field['Result_Date'] ?></label></td>
                      <td><input type="hidden" name="txt_result_id" id="txt_result_id" value=" <?php echo $result_id;?> "></td>
                    </tr>
                     <tr>
                      <td><label>Combination</label>
                                  <select name="res_course" >
                                  <option value="<?php echo $field['Course'] ?>"><?php echo $field['Course'] ?></option>
                                  <option value="BCA">BCA</option>
                                  <option value="MCA">MCA</option>
                                  </select></td>
                       <td><label>Year</label>
                          <select name="res_year">
                                <option value="<?php echo $field['Year'] ?>"><?php echo $field['Year'] ?></option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                </select></td>
                      
                            <td><label>Semister</label>
                            <select name="res_sem" >
                                <option value="<?php echo $field['Semister'] ?>"><?php echo $field['Semister'] ?></option>
                                <option value="1st Sem">1st Sem</option>
                                <option value="2nd Sem">2nd Sem</option>
                                <option value="3rd Sem">3rd Sem</option>
                                <option value="4th Sem">4th Sem</option>
                                <option value="5th Sem">5th Sem</option>
                                <option value="6th Sem">6th Sem</option>
                                </select></td>
                      </tr>
                    <tr> 
                    <td><input style="color: green; width: 75%;" type="file" name="fileupload" id="fileupload"></td></tr>
                    <td><div style="position: relative; margin-top: 0px; margin-left: 0px;  float: left;" align="center">
                    <button align="center" type="submit" name="Update">Update Result</button>
                    </div>
                    </td>
              </table>
                    </form>

</form>
<?php
 if(isset($_POST['Update']))
{ 
  $user_id = $_SESSION['User_name'];
  $res_course = $_POST['res_course'];
  $res_year = $_POST['res_year'];
  $res_sem = $_POST['res_sem'];
  $filename = $_FILES["fileupload"]["name"];
  $tempname = $_FILES["fileupload"]["tmp_name"];
  $folder = "C:\wamp64\www\College\Results/".$filename;
  move_uploaded_file($tempname, $folder);

  if($res_course!="" && $res_year!="" && $res_sem!="") 
  {
    if($folder!="" && $filename!="" && $tempname!="")
    {
// Specify the query to execute
      $query = "update result Set Course='$res_course', Year='$res_year', Semister = '$res_sem' where Result_ID ='$result_id' ";
    $result_update =  "Update student_reg set Res_Path = '$folder' Where Classs = '$res_course' && Year = '$res_year' && Semister ='$res_sem' ";

// Execute query
       $sql = mysqli_query($conn,$query);  $sql2 = mysqli_query($conn, $result_update);
            if($sql && $sql2)
            {  
               echo '<script type="text/javascript">alert("Result Updated Successfully!...");window.location=\'ResultModule.php\';</script>';
            }   
            else
            {
               echo '<script type="text/javascript">alert("Error!...Failed!.. Please Try Again.");</script>';
            }
    }
    else
    {
               echo '<script type="text/javascript">alert("Please Select File To update Result!....");</script>';
    }
  }
  else
  {
     echo '<script type="text/javascript">alert("Please Select Course Year and Sem !...");</script>';

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
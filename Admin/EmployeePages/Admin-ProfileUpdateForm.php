<?php
if(!$_SESSION)
{
  session_start();
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
               <h1 style="margin-left: -60%; margin-top: 15px; font-family: serif;">Update Profile</h1>
               <?php 

               $host = "localhost";
               $user = "root";
               $db = "college_portal";
               $pw="";
               $conn = mysqli_connect($host , $user , $pw, $db);
                $user_id = $_SESSION['User_name'];
                

                $query = "select * From  admin where  Admin_id='$user_id'  " ;
                $result = mysqli_query($conn,$query);
                $rec = mysqli_num_rows($result);
   			        $fields=mysqli_fetch_assoc($result);
  ?>
                <input type="hidden" name="emp_regid"  id="emp_regid" value=""/>
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <table width="81%" border="0" cellspacing="5" cellpadding="0">
                    <span>
                    <td><label style="color: red;">Admin ID :</label>
                    <label style="color: red"><?php echo $_SESSION['User_name'];?></label></td>
                  </span>
                  <tr>
                      <td><label>Name :</label></td>
                      <td><span id="sprytextfield1">
                        <input type="text" name="emp_pname" id="emp_pname" value="<?php echo $fields['Name'];?>"></span>
                      </td>

                      <td><label>DOB :</label></td>
                      <td><span id="sprytextfield2">
                          <input type="date" name="txt_emp_dob" id="txt_emp_dob" value="<?php echo $fields['DOB'];?>"></span>
                      </td>

                    </tr>
                    <tr>
                      <td><label>Mobile No :</label></td>
                      <td><span id="sprytextfield3">
                          <input type="number" name="txt_emp_no" id="txt_emp_no" value="<?php echo $fields['Mobile'];?>"></span>
                      </td>
                       <td><label>Email :</label></td>
                      <td><span id="sprytextfield4">
                          <input type="text" name="txt_emp_email" id="txt_emp_email" value="<?php echo $fields['Email'];?>"></span></td>
                    </tr>
                    <tr>
                    	 <td><label>Address :</label></td>
                      <td><span id="sprytextfield5">
                      <input type="text" name="txt_emp_add" id="txt_emp_add" value="<?php echo $fields['Address'];?>" /></span></td>


                      <td><label>State :</label></td>
                      <td><span id="sprytextfield5">
                      <input type="text" name="txt_emp_state" id="txt_emp_state" value="<?php echo $fields['State'];?>" /></span></td>
                    </tr>
                    <tr>

                      <td><label>City :</label></td>
                      <td><span id="sprytextfield6">
                      <input type="text" name="txt_emp_city" id="txt_emp_city" value="<?php echo $fields['City'];?>" />
                      </span></td>

                      <td><label>Pin Code :</label></td>
                      <td><span id="sprytextfield7">
                      <input type="text" name="txt_emp_pincode" id="txt_emp_pincode" value="<?php echo $fields['Pin_Code'];?>" /></span></td>
                    </tr>
                    <tr>
                      <td><label>Sequrity Question :</label></td>
                      <td><span id="sprytextfield8">
                          <select name="slct_sq" id="slct_sq">
                          <option value="<?php echo $fields['Sequrity_question'];?>"><?php echo $fields['Sequrity_question'];?></option>
                          <option value="What is Favorit Color?">What is Favorit Color?</option>
                          <option value="In Which City You Born?">In Which City You Born?</option>
                          <option value="Your First Vehical?">Your First Vehical?</option>
                      </select></span></td>
                      <td><label>Answer :</label></td>
                      <td><span id="sprytextfield9">
                      <input type="text" name="txt_emp_answer" id="txt_emp_answer" value="<?php echo $fields['Answer'];?>" /></span></td>
                    </tr>
                    
                    <td><div style="position: relative; margin-top: 50px;   float: left;" align="center">
                    <button align="center" type="submit" name="submit">Update  Profile</button>
                    </div>
                  </td>
                    
          </table>
          <table width="15%" style="float: left; border: none; padding: 0px; margin: 0px;">
            <tr>
              <td><label>Profile</label></td>
            </tr>
            <tr>
              <td><img width="98%;" height="200px" src="<?php echo $fields['Image'];?>"></td>
            </tr>
            <tr>
              <td><input type="file" name="fileupload" id="fileupload"></td>
            </tr>
          </table>
<?php
          $host = "localhost";
$user = "root";
$pw = "";
$db = "college_portal";

$conn = mysqli_connect($host , $user , $pw ,$db);
if(isset($_POST['submit']))
{ 
  $user_id = $_SESSION['User_name'];
  $name = $_POST['emp_pname'];
  $dob = $_POST['txt_emp_dob'];
  $mobno = $_POST['txt_emp_no'];
  $email = $_POST['txt_emp_email'];
  $add = $_POST['txt_emp_add'];
  $state = $_POST['txt_emp_state'];
  $city = $_POST['txt_emp_city'];
  $pincode = $_POST['txt_emp_pincode'];
  $sq = $_POST['slct_sq'];
  $Answer = $_POST['txt_emp_answer'];
  $filename = $_FILES["fileupload"]["name"];
  $tempname = $_FILES["fileupload"]["tmp_name"];
  $folder = "Images/".$filename;
  move_uploaded_file($tempname, $folder);
  if($filename!="" && $tempname!="")
  {

     $query = "Update admin set Admin_id='$user_id', Name='$name',DOB='$dob',Mobile='$mobno', Email='$email', Address='$add',State='$state',City='$city',Pin_Code='$pincode',Sequrity_question='$sq',Answer='$Answer', Image='$folder' Where Admin_id='$user_id'" ;
     $query1 = "update login1 set   Images = '$folder', Name='$name' where User_name = '$user_id'";
            $result = mysqli_query($conn,$query); $result2 = mysqli_query($conn, $query1);
            if($result && $result2)
            {
              echo '<script type="text/javascript">alert("Profile Updated Successfully!...");window.location=\'M-Admin-Home.php\';</script>';

            } 
           else
           {
             echo '<script type="text/javascript">alert("Failed ")</script>';
           }
  }
  else
  {
             echo '<script type="text/javascript">alert("Please Select Profile Image!... ")</script>';
  }
}
?>
      </form>
    </div>
 </div> <!-- /main -->
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
            [ 
              [//Name 
              ["minlen=1",  "Please Enter Name"              ] ],
              [//DOB
              ["minlen=1",    "Please Select Date of Birth " ] ],
              [//Mobile
              ["num",   "Please Enter valid Mobile "         ],
              ["minlen=10", "Please Enter valid Mobile "     ] ],
              [//Email              
              ["minlen=1",    "Please Enter Email "          ], 
              ["email",   "Please Enter valid email "        ] ],
              [//State
              ],
              [// City
              ],
              [//Pin COde
              ["minlen=1",  "Please Enter Area Pin Code"              ] ],
              [//Sequrity Question
              ["minlen=1",  "Please Select Sequrity Question"              ] ],
              [//Answer
              ["minlen=1",    "Please Enter Your Sequrity Answer"            ] ] ];
              
              
</SCRIPT>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextfield("sprytextfiled6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextfield("sprytextfield9");

//-->
</script>
</body>
</html>

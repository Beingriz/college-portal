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
<title> Update Profile</title>
    <link rel="stylesheet" type="text/css" herf="./css/12-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
  label {color: black; text-shadow: none;}
  button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
input[type="file"]{color: red; margin: 2px; width: 150px; padding: 5px;
}
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">
               <h1 style="margin-left: -60%; margin-top: 15px; text-shadow: none; font-family: serif;">Update Profile</h1>
               <?php 

               $host = "localhost";
               $user = "root";
               $db = "college_portal";
               $pw="";
               $conn = mysqli_connect($host , $user , $pw, $db);
                $user_id = $_SESSION['User_name'];
                

                $query = "select * From  staff_reg where    Staff_id='$user_id'  " ;
                $result = mysqli_query($conn,$query);
                $rec = mysqli_num_rows($result);
   			        $fields=mysqli_fetch_assoc($result);
                $state = $fields['State'];
                $city = $fields['City'];
                $Country = $fields['Country'];

  ?>
                <input type="hidden" name="emp_regid"  id="emp_regid" value=""/>
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <table style="float: left;" width="73%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td><h2><label style="color: red; text-decoration-color: red;">Reg No</label></h2></td>
                 <td><h2> <label style="color: green"><?php echo $_SESSION['User_name'];?></label></h2></td>
                  </tr>

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
                          <input type="number" name="txt_emp_no" id="txt_emp_no" value="<?php echo $fields['Mobile_no'];?>"></span>
                      </td>
                       <td><label>Email :</label></td>
                      <td><span id="sprytextfield4">
                          <input type="text" name="txt_emp_email" id="txt_emp_email" value="<?php echo $fields['Email'];?>"></span></td>
                    </tr>
                    <tr>
                    	 <td><label>Address :</label></td>
                      <td><span id="sprytextfield5">
                      <input type="text" name="txt_emp_add" id="txt_emp_add" value="<?php echo $fields['Adress'];?>" /></span></td>

                      <td><label>Country :</label></td>
                      <td><span id="sprytextfield5">
                        <?php
                        $retrive = "select * from Countries where id='$Country' ";
                        $sql_query = mysqli_query($conn , $retrive);
                        $cntryname = mysqli_fetch_assoc($sql_query); 
                        ?>
                      <input type="text" name="txt_emp_state" id="txt_emp_state" value="<?php echo $cntryname['name'];?>" /></span></td>
                    </tr>


                      <td><label>State :</label></td>
                      <td><span id="sprytextfield5">
                        <?php
                        $retrive = "select * from states where id='$state' ";
                        $sql_query = mysqli_query($conn , $retrive);
                        $sname = mysqli_fetch_assoc($sql_query); 
                        ?>
                      <input type="text" name="txt_emp_state" id="txt_emp_state" value="<?php echo $sname['name'];?>" /></span></td>
                   
                      <td><label>City :</label></td>
                      <td><span id="sprytextfield6">
                        <?php
                        $retrive = "select * from cities where id='$city' ";
                        $sql_query = mysqli_query($conn , $retrive);
                        $cname = mysqli_fetch_assoc($sql_query); 
                        ?>
                      <input type="text" name="txt_emp_city" id="txt_emp_city" value="<?php echo $cname['name'];?>" />
                      </span></td>
                    </tr>

                      <td><label>Pin Code :</label></td>
                      <td><span id="sprytextfield7">
                      <input type="text" name="txt_emp_pincode" id="txt_emp_pincode" value="<?php echo $fields['Pin_code'];?>" /></span></td>
                   >
                      <td><label>Sequrity Question :</label></td>
                      <td><span id="sprytextfield8">
                          <select name="slct_sq" id="slct_sq">
                          <option value="<?php echo $fields['Seq_Question'];?>"><?php echo $fields['Seq_Question'];?></option>
                          <option value="What is Favorit Color?">What is Favorit Color?</option>
                          <option value="In Which City You Born?">In Which City You Born?</option>
                          <option value="Your First Vehical?">Your First Vehical?</option>
                      </select></span></td>
                    </tr>
                    <tr>
                      <td><label>Answer :</label></td>
                      <td><span id="sprytextfield9">
                      <input type="text" name="txt_emp_answer" id="txt_emp_answer" value="<?php echo $fields['Ansswer'];?>" /></span></td>
                    </tr>
                    
                    <td><div style="position: relative; margin-top: 50px;   float: left;" align="center">
                    <button align="center" type="submit" name="submit">Update  Profile</button>
                    </div>
                  </td>
                    
          </table>
          <table style="float: left; border: none; width: 10%; padding: 0px; margin: 0px;">
            <tr>
              <td><label>Profile</label></td>
            </tr>
            <tr>
              <td><img  style="width:160px; height: 200px; "src="<?php echo $fields['Image'];?>"></td>
            </tr>
            <tr>
              <td><input style=" color: black;" type="file" name="fileupload" id="fileupload"></td>
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
     $query = "Update staff_reg set  Name='$name',DOB='$dob',Mobile_no='$mobno', Email='$email', Adress='$add',State='$state',City='$city',Pin_code='$pincode',Seq_Question='$sq',Ansswer='$Answer', Image='$folder' Where Staff_id='$user_id'" ;
     $query1 = "update login1 set   Images = '$folder', Name='$name' where User_name = '$user_id'";
            $result = mysqli_query($conn,$query); $result2 = mysqli_query($conn, $query1);
            if($result && $result2)
            {
              echo '<script type="text/javascript">alert("Profile Updated Successfully!...");window.location=\'M-Staff-Home.php\';</script>';

            } 
           else
           {
             echo '<script type="text/javascript">alert("Failed ")</script>';
           }
   	
}
else
{
             echo '<script type="text/javascript">alert("Please Select profile image")</script>';
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

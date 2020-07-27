
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Update</title>
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
.border .form form table tr th  label{ background: slateblue; padding: 2px; font-size: 18px; color: white; }
.border .form form table tr th{ background: slateblue; padding:10px; color: white; }
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">
      <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">

          <table width="100%" border="0" cellspacing="0" cellpadding="0">

            <h1 style="">Delete Student  Details</h1>
              <tr>
                <td><label>Student Id</label></td>
                <td><span>
                    <input type="text" name="txt_st_id" id="txt_st_id" placeholder="Enter Register No" /></span>
                </td>
                    
                <td><label>Enter Name</label></td>
                <td><span >
                <input type="text" name="txt_st_name" id="txt_st_name" placeholder="Enter Name"  onkeypress="return(event.charCode >64  &&  event.charCode > 91) ||(event.charCode >96 && event.charCode < 123) || event.keyCode == 32" />
                </span></td>
                   
                <td><label>Select Class</label></td>
                <td><select name="slct_st_class" style="width: 80%;">
                      <option value="--select--">--select Class--</option>
                      <option value="BCA">BCA</option>
                      <option value="MCA">MCA</option>
                    </select>
                </tr>
                <td>
                  <div style="position: relative; margin-top: 10px; margin-left: 0px;  float: left;" align="center">
                      <button align="center" type="submit"  name="submit"> Search </button>
                  </div>
                </td>      
            </table>

<?php
// Establish Connection with Database
$host = "localhost";
$user = "root";
$pw = "";
$db = "College_portal";
$conn = mysqli_connect($host , $user , $pw , $db);


if(isset($_POST['submit']))
  {


    $st_Id=$_POST['txt_st_id'];
    $st_name=$_POST['txt_st_name'];
    $st_class=$_POST['slct_st_class'];

    if($st_Id!="" && $st_name!="" && $st_class!="")
    {
// Specify the query to execute
    $sql = "select * from student_reg where Register_No='$st_Id' && First_Name='$st_name' && Classs='$st_class'";
// Execute query
    $result = mysqli_query($conn,$sql);  
    $record = mysqli_num_rows($result); 

    
    if($record!=0 )
    {
  ?>
    <table style="border: none; margin-top: -15px; align-content: center; width: 100%;"  align="center" border="1" cellspacing="4" cellpadding="5"> 
      <tr>
        <th><label>Register No</label></th>
        <th><label>Name</label></th>
        <th><label>DOB</label></th>
        <th><label>Mobile</label></th>
        <th><label>Email</label></th>
        <th><label>Class</label></th>
        <th><label>Semester</label></th>

        <th><label>Photo</label></th>
      </tr>
    
  <?php
    while($fields = mysqli_fetch_assoc($result)  )
      {
         echo "<tr>
                   <td><label>".$fields['Register_No']."</label></td>
                   <td><label>".$fields['First_name']."</label></td>
                   <td><label>".$fields['DOB']."</label></td>
                   <td><label>".$fields['phone_no']."</label></td>
                   <td><label>".$fields['Email']."</label></td>
                   <td><label>".$fields['Classs']."</label></td>
                   <td><label>".$fields['Semister']."</label></td>
                   <td><img src=".$fields['Profile_image']."></td>
               </tr>";
      }
    }
  else
   {
    echo '<script type="text/javascript">alert("Sorry!..No Record Found Please Try again.")</script>';
   }
  }
  else
  {
    echo '<script type="text/javascript">alert("Please Enter Register No  & Name!..")</script>';
  }
}
  ?>
</form>
  <div class="tab">
    <?php
    $st_Id=$_POST['txt_st_id'];
    $st_name=$_POST['txt_st_name'];
    $st_class=$_POST['slct_st_class'];
// Specify the query to execute
    $sql2 = "select * from student_reg where Register_No='$st_Id' && First_Name='$st_name' && Classs='$st_class'  ";
// Execute query
    $result1= mysqli_query($conn,$sql2);
    $record = mysqli_num_rows($result1);
    $fields = mysqli_fetch_assoc($result1)
    
  ?>
          <table width="96%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <input type="hidden" name="sregno" id="sregno" value="<?php echo $fields['Register_No'];?>">
                      <td><label>First Name</label></td>
                      <td><span id="sprytextfield1">
                          <input style="width: 90%;" type="text" id="txt_st_fname" value="<?php echo $fields['First_name'];?>"   name="txt_st_fname" disabled="true" ></span>
                      </td>
                      <td><label> Last Name</label></td>
                      <td><span id="sprytextfield2">
                          <input style="width: 90%;" type="text" id="txt_st_lname" value="<?php echo $fields['Last_Name'];?>" name="txt_st_lname" disabled="true" ></span>
                      </td>
                  
                      <td><label>DOB</label></td>
                      <td><span id="sprytextfield3">
                        <input style="width: 90%;" type="date" name="s_dob" value="<?php echo $fields['DOB'];?>" disabled="true">
                        </span></td>
                    </tr>
                    <tr>
                        <td><label>Gender</label></td>
                      <td><select style="width: 90%;" name="sgender" id="sgender" disabled="true">
                          <option value="<?php echo $fields['Gender'];?>"><?php echo $fields['Gender'];?></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                      </select></td>
 
                      <td> <label>Mobile:</label></td>
                      <td><span id="sprytextfield4">
                      <input type="number" disabled="true" name="txt_st_mno" id="txt_st_mno"  value="<?php echo $fields['phone_no'];?>" />
                      </span></td>
                      
                      <td> <label>Email:</label></td>
                      <td><span id="sprytextfield5">
                      <input type="text" disabled="true" name="txt_st_email" id="txt_st_email" value="<?php echo $fields['Email'];?>" />
                      </span></td>
                    </tr>
                    
                    <tr>
                      <td><label>Combination</label></td>
                                  <td><select name="ad_comb" style="width: 80%;" disabled="true">
                                  <option value="<?php echo $fields['Classs'];?>"><?php echo $fields['Classs'];?></option>
                                  <option value="BCA">BCA</option>
                                  <option value="MCA">MCA</option>
                                  </select></td>
                                
                            <td><label>Year</label></td>
                            <td><select name="ad_yr" style="width: 60%;" disabled="true">
                                <option value="<?php echo $fields['Year'];?>"><?php echo $fields['Year'];?></option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                </select></td>
                            <td><label>Sem</label></td>
                            <td><select name="ad_sec" style="width: 80%;" disabled="true">
                                <option value="<?php echo $fields['Semister'];?>"><?php echo $fields['Semister'];?>-</option>
                                <option value="1st Sem">1st Sem</option>
                                <option value="2nd Sem">2nd Sem</option>
                                <option value="3rd Sem">3rd Sem</option>
                                <option value="4th Sem">4th Sem</option>
                                <option value="5th Sem">5th Sem</option>
                                <option value="6th Sem">6th Sem</option>
                                </select></td>
                      </tr>

        </table>
           <td><div style="position: relative; margin-top: 10px; width: 200px; float: left;" align="center">
                    <button type="submit" name="update">Delete Student</button>
                  </div>
                    </td>
<?php
if(isset($_POST['update']))
{

  $reg_no = $_POST['sregno'];
 //personal Details elment names
  $fname = $_POST['txt_st_fname'];
  $lname  = $_POST['txt_st_lname'];
  $dob  = $_POST['s_dob'];
  $spno = $_POST['txt_st_mno'];
  $email  = $_POST['txt_st_email'];
  $address = $_POST['txt_st_add'];
  $sstate  = $_POST['s_state'];
  $scity = $_POST['s_city'];
  $pcode  = $_POST['txt_st_pin'];
  $gndr = $_POST['sgender'];
  
 //Qualifiaction Details Elements Names
  $com  = $_POST['ad_comb'];
  $sec  = $_POST['ad_sec'];
  $yr  = $_POST['ad_yr'];
  $t_fee =  $_POST['txt_st_tfee'];
  $p_fee = $_POST['txt_st_pfee'];
  $b_fee = $_POST['txt_st_bfee'];



  // Specify the query to Insert Record
   $sql1 = "DELETE from student_reg where Register_No='$reg_no'";
    $student = mysqli_query($conn, $sql1);  

   $sql2 = "DELETE from student_parent where Register_No='$reg_no'";
    $student = mysqli_query($conn, $sql2);  

    $sql3 = "DELETE from login1 where User_name = '$reg_no'";
    $login = mysqli_query($conn, $sql3);

    $edu = "DELETE from student_fee where Register_No = '$reg_no'";
  $education = mysqli_query($conn, $edu);
    mysqli_close($conn);
         if(!$student)
         {
            echo '<script type="text/javascript">alert("Unable to Delete Student Data!... ");</script>';
        }
      elseif (!$education) 
      {
        echo '<script type="text/javascript">alert("Unable to Delete Student education Details!... .");</script>';
        }
      elseif (!$login) 
      {
        echo '<script type="text/javascript">alert("Unable to Delete Student Login!... ");</script>';
        }
      else
        {
     echo '<script type="text/javascript">alert("Student Data Removed successfully. .");window.location=\'StudentModule.php\';</script>';
        }
}

?>

?>
     
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
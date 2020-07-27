
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Delete Form</title>
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
.border .form form table tr th  label{ background: slateblue; padding: 4px; font-size: 20px; color: white; }
.border .form form table tr th{ background: slateblue; padding:7px; color: white; }
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">
      <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">

          <table width="100%" border="0" cellspacing="0" cellpadding="0">

 					  <h1 style="color: red;">Delete Employee Details</h1>
              <tr>
                <td><label>Staff Id</label></td>
                <td><span> 
                    <input type="text" name="txt_emp_id" id="txt_emp_id" placeholder="Enter Staff ID"   /></span>
                </td>
                    
                <td><label>Enter Name</label></td>
                <td><span >
                <input type="text" name="txt_emp_name" id="txt_emp_name" placeholder="Enter Name"   onkeypress="return(event.charCode >64  &&  event.charCode > 91) ||(event.charCode >96 && event.charCode < 123) || event.keyCode == 32"/>
                </span></td>
                   
                <td><label>Select Department</label></td>
                <td><select name="slct_emp_dptmnt" style="width: 80%;">
                      <option value="--select--">--select Department--</option>
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


		$Id=$_POST['txt_emp_id'];
		$name=$_POST['txt_emp_name'];
		$Department=$_POST['slct_emp_dptmnt'];

		if($Id!="" && $name!="")
		{
// Specify the query to execute
		$sql = "select * from staff_reg where Staff_id='$Id' && Name='$name' && Department='$Department' ";
// Execute query
		$result = mysqli_query($conn,$sql);
		$record = mysqli_num_rows($result);
		
		if($record!=0)
		{
	?>
		<table style="border: none; margin-top: -15px; align-content: center;" align="center" border="1" cellspacing="4" cellpadding="5"> 
			<tr>
				<th><label>Staff ID</label></th>
				<th><label>Name</label></th>
        <th><label>Mobile No</label></th>
        <th><label>Email Id</label></th>
        <th><label>Department</label></th>
        <th><label>Year</label></th>
        <th><label>Semester</label></th>
        <th><label>Experience</label></th>
        <th><label>Photo</label></th>
			</tr>
		
  <?php
		while($fields = mysqli_fetch_assoc($result))
		  {
			   echo "<tr>
				           <td><label>".$fields['Staff_id']."</label></td>
					         <td><label>".$fields['Name']."</label></td>
                   <td><label>".$fields['Mobile_no']."</label></td>
                   <td><label>".$fields['Email']."</label></td>
                   <td><label>".$fields['Department']."</label></td>
                   <td><label>".$fields['Year']."</label></td>
                   <td><label>".$fields['Semister']."</label></td>
                   <td><label>".$fields['Experience']."</label></td>

                   <td><img src=".$fields['Image']."></td>
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
		echo '<script type="text/javascript">alert("Please Enter ID & Name!..")</script>';
  }
}
	?>
</form>
  <div class="tab">
  	<?php

  		$Id=$_POST['txt_emp_id'];
		$name=$_POST['txt_emp_name'];
		$Department=$_POST['slct_emp_dptmnt'];
// Specify the query to execute
		$sql = "select * from staff_reg where Staff_id='$Id' && Name='$name' && Department='$Department' ";
// Execute query
		$result = mysqli_query($conn,$sql);
		$record = mysqli_num_rows($result);
		$fields = mysqli_fetch_assoc($result)
		
	?>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
          	<input type="hidden" name="emp_id" id="emp_id" value="<?php echo $fields['Staff_id'];?>">
            <h1 style="color: red;">Delete Employee Details</h1>
                    <tr> 
                      <td><label>Name</label></td>
                      <td><span id="sprytextfield1">
                          <input type="text" disabled="true" name="txt_emp_name" id="txt_emp_name" value="<?php echo $fields['Name'];?>"></span>
                      </td>
                      <td><label>DOB</label></td>
                      <td><span id="sprytextfield2">
                        <input type="date" disabled="true" name="txt_emp_dob" id="txt_emp_dob" value="<?php echo $fields['DOB'];?>">
                        </span></td>
                    
                      <td><label>Mobile: </label></td>
                      <td><span id="sprytextfield3">
                      <input type="number"  disabled="true" name="txt_emp_no" id="txt_emp_no" value="<?php echo $fields['Mobile_no'];?>" />
                      </span></td>
                    </tr>
                    <tr>
                      <td> <label>Email:</label></td>
                      <td><span id="sprytextfield4">
                      <input type="text" disabled="true" name="txt_emp_email" id="txt_emp_email" value="<?php echo $fields['Email'];?>" />
                      </span></td>
                      
                      <td><label>Qualification</label></td>
                           <td><select name="slct_emp_quali" style="width: 80%;" disabled="true">
                           <option value="<?php echo $fields['Qualification'];?>"><?php echo $fields['Qualification'];?></option>
                           <option value="BCA">BCA</option>
                           <option value="BCom">BCom</option>
                           <option value="BSC">BSC</option>
                           <option value="BBA">BBA</option>
                           <option value="MCA">MCA</option>
                           <option value="MBA">MBA</option>
                           <option value="MSc">MSc</option>
                           <option value="MCom">MCom</option>
                           </select>
                      </td>
          
                    </tr>
 
                    <tr>
                          <td><label>Subject</label></td>
                           <td><select name="slct_emp_sub" style="width: 80%;" disabled="true">
                           <option value="<?php echo $fields['Specialist'];?>"><?php echo $fields['Specialist'];?></option>
                           <option value="C Programming">C Programming</option>
                           <option value="C++ Programming">C++ Programming</option>
                           <<option value="php">Php</option>
                           <option value="Java">Java</option>
                           <option value="Advanced Java">Advanced Java</option>
                           <option value="Core Java">Core Java</option>
                           </select>
                      </td>
                      <td><label>Experience</label></td>
                      <td><span id="sprytextfield7">
                          <input type="text"  disabled="true" name="txt_emp_exp" id="txt_emp_exp" value="<?php echo $fields['Experience'];?>"</span>
                      </td>
                      <td><label>Previous Job</label></td>
                      <td><select name="slct_emp_lwa" disabled="true">
                          <option value="<?php echo $fields['Last_job'];?>"><?php echo $fields['Last_job'];?></option>
                          <option value="Company"> Company</option>
                          <option value="Institute"> Institute</option>
                          <option value="college"> College</option>
                          <option value="Other"> Others</option>
                          </select></td>
                    </tr>
                    <tr>
                      
                          <td><label>Other</label></td>
                      <td><span id="sprytextfield8">
                      <input type="text" disabled="true" name="txt_emp_other" id="txt_emp_pin" value="<?php echo $fields['other'];?>" />
                      </span></td>
                      <td><label>Department</label></td>
                           <td><select name="slct_emp_dptmnt" style="width: 80%;" disabled="true">
                           <option value="<?php echo $fields['Department'];?>"><?php echo $fields['Department'];?></option>
                           <option value="BCA">BCA</option>
                           <option value="MCA">MCA</option>
                          </select>
                      </td>
                       <td><label>Year</label></td>
                            <td><select name="slct_emp_dptmnt_yr" style="width: 60%;" disabled="true">
                              <option value="<?php echo $fields['Year'];?>"><?php echo $fields['Year'];?></option>
                              <option value="1st Year">1st Year</option>
                              <option value="2nd Year">2nd Year</option>
                              <option value="3rd Year">3rd Year</option>
                            </select></td>
                   </tr>
           
                    <tr>
                      
                      <td><label>Sem</label></td>
                                  <td><select name="slct_emp_dptmnt_sem" style="width: 80%;" disabled="true">
                                    <option value="<?php echo $fields['Semister'];?>"><?php echo $fields['Semister'];?></option>
                                    <option value="1st Sem">1st Sem</option>
                                    <option value="2nd Sem">2nd Sem</option>
                                    <option value="3rd Sem">3rd Sem</option>
                                    <option value="4th Sem">4th Sem</option>
                                    <option value="5th Sem">5th Sem</option>
                                    <option value="6th Sem">6th Sem</option>
                                  </select></td>
                       <td><label>Subject 1</label></td>
                           <td><select name="slct_emp_dptmnt_sub1" style="width: 80%;" disabled="true">
                           <option value="<?php echo $fields['Subject1'];?>"><?php echo $fields['Subject1'];?></option>
                           <option value="C Programming">C Programming</option>
                           <option value="C++ Programming">C++ Programming</option>
                           <<option value="php">Php</option>
                           <option value="Java">Java</option>
                           <option value="Advanced Java">Advanced Java</option>
                           <option value="Core Java">Core Java</option>
                           </select>
                      </td>
                      <td><label>Subject 2</label></td>
                           <td><select name="slct_emp_dptmnt_sub2" style="width: 80%;" disabled="true">
                           <option value="<?php echo $fields['Subject2'];?>"><?php echo $fields['Subject2'];?></option>
                           <option value="C Programming">C Programming</option>
                           <option value="C++ Programming">C++ Programming</option>
                           <<option value="php">Php</option>
                           <option value="Java">Java</option>
                           <option value="Advanced Java">Advanced Java</option>
                           <option value="Core Java">Core Java</option>
                           </select>
                      </td>
                   </tr>
               
          </table>
           <td><div style="position: relative; margin-top: 10px; width: 200px; float: left;" align="center">
                    <button type="submit" name="update"> Delete Employee </button>
                  </div>
                    </td>
<?php
if(isset($_POST['update']))

{

	$emp_reg_id = $_POST['emp_id'];
	$emp_name = $_POST['txt_emp_name'];
	$emp_dob = $_POST['txt_emp_dob'];
	$emp_no = $_POST['txt_emp_no'];
	$emp_email = $_POST['txt_emp_email'];
	$emp_add = $_POST['txt_emp_add'];
	$emp_state = $_POST['slct_emp_state'];
	$emp_city = $_POST['slct_emp_city'];
	$emp_pin = $_POST['txt_emp_pin'];
	$emp_qualifi = $_POST['slct_emp_quali'];
	$emp_spclin = $_POST['slct_emp_sub'];
	$emp_exprnc = $_POST['txt_emp_exp'];
	$emp_lwa = $_POST['slct_emp_lwa'];
	$emp_othr = $_POST['txt_emp_other'];
	$emp_departmet = $_POST['slct_emp_dptmnt'];
	$emp_departmet_yr = $_POST['slct_emp_dptmnt_yr'];
	$emp_departmet_sem = $_POST['slct_emp_dptmnt_sem'];
	$emp_departmet_sub1 = $_POST['slct_emp_dptmnt_sub1'];
	$emp_departmet_sub2 = $_POST['slct_emp_dptmnt_sub2'];
	$emp_departmet_msg = $_POST['txt_emp_msg'];
	$emp_type = ["Staff"];
	



	// Specify the query to Insert Record
	$query1 = "DELETE FROM `staff_reg` WHERE `Staff_id`='".$emp_reg_id."' ";

		$result = mysqli_query ($conn,$query1);

		$sql1 =  "DELETE FROM `login1` WHERE `User_name`='".$emp_reg_id."' ";

	// execute query
	 $result1 = mysqli_query($conn, $sql1);

		if(!$result1)
		{
			echo '<script type="text/javascript">alert("Employee Delete Fail!.. Please try again");</script>';
		}
		elseif(!$result1)
		{
		echo '<script type="text/javascript">alert("Error! Unable to Delete Login ID...Please try again.. ");</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Employee Deleted  Successfully!..");window.location=\'UpdateEmp.php\';</script>';
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
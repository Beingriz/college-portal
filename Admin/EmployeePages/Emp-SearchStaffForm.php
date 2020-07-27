
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search Staff Page</title>
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
.border .form table tr th label{color: white; font-weight: bold; font-family: serif; font-stretch: semi-expanded; font-size: 22px;}
.border .form input[type="text"]{padding: 5px;  }
table tr th{ background-color: slateblue; padding: 10px;  }
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">
      <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">

          <table width="100%" border="0" cellspacing="0" cellpadding="0">

            <h1 style="color: brown; text-decoration: underline;">Search  Employee Details </h1>
              <tr>
                <td><label>Staff Id</label></td>
                <td><span>
                    <input type="text" name="txt_emp_id" id="txt_emp_id" placeholder="Enter Staff ID" /></span>
                </td>
                    
                <td><label>Enter Name</label></td>
                <td><span >
                <input type="text" name="txt_emp_name" id="txt_emp_name" placeholder="Enter Name"   onkeypress="return(event.charCode >= 65  && event.charCode <= 123) || event.keyCode == 32"/>
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
                <td>
                  <div style="position: relative; margin-top: 10px; margin-left: 0px;  float: left;" align="center">
                      <button align="center" type="submit"  name="listall"> List All </button>
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

    if($Id!="" || $name!="")
    {
// Specify the query to execute
    $sql = "select * from staff_reg where Staff_id='$Id' || Name='$name' || Department='$Department' ";
// Execute query
    $result = mysqli_query($conn,$sql);
    $record = mysqli_num_rows($result);
    
    if($record!=0)
    {
  ?>
    <table style="border: none; margin-top: -15px; align-content: center;" align="center" border="1" cellspacing="0" cellpadding="5"> 
      <tr>
        <th><label>Staff ID</label></th>
        <th><label>Name</label></th>
        <th><label>Mobile No</label></th>
        <th><label>Department</label></th>
        <th><label>Year</label></th>
        <th><label>Semester</label></th>
        <th><label>Photo</label></th>
        <th><label>Edit</label></th>
        <th><label>Delete</label></th>
      </tr>
    
  <?php
    while($fields = mysqli_fetch_assoc($result))
      {
         echo "<tr>
                   <td><label>".$fields['Staff_id']."</label></td>
                   <td><label>".$fields['Name']."</label></td>
                   <td><label>".$fields['Mobile_no']."</label></td>
                   <td><label>".$fields['Department']."</label></td>
                   <td><label>".$fields['Year']."</label></td>
                   <td><label>".$fields['Semister']."</label></td>
                   <td><img src=".$fields['Image']."></td>
                    <td><a href='UpdateEmp.php'>Edit</a></td>
                    <td><a href='./EmployeePages/Emp-DDeleteForm.php?emp_id=".$fields['Staff_id']."'>Delete</a></td>


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
    echo '<script type="text/javascript">alert("Please Enter ID or Name!..")</script>';
  }
}
elseif(isset($_POST['listall']))
  {


    $Id=$_POST['txt_emp_id'];
    $name=$_POST['txt_emp_name'];
    $Department=$_POST['slct_emp_dptmnt'];

   
// Specify the query to execute
    $sql = "select * from staff_reg  ";
// Execute query
    $result = mysqli_query($conn,$sql);
    $record = mysqli_num_rows($result);
    
    if($record!=0)
    {
  ?>
    <table style="border: none; margin-top: -15px; align-content: center;" align="center" border="1" cellspacing="0" cellpadding="5" align="center"> 
      <tr>
        <th><label>Staff ID</label></th>
        <th><label>Name</label></th>
        <th><label>Mobile No</label></th>

        <th><label>Department</label></th>
        <th><label>Year</label></th>
        <th><label>Semester</label></th>

        <th><label>Photo</label></th>
                <th><label>Edit</label></th>
        <th><label>Delete</label></th>
      </tr>
    
  <?php
    while($fields = mysqli_fetch_assoc($result))
      {
         echo "<tr>
                   <td><label>".$fields['Staff_id']."</label></td>
                   <td><label>".$fields['Name']."</label></td>
                   <td><label>".$fields['Mobile_no']."</label></td>

                   <td><label>".$fields['Department']."</label></td>
                   <td><label>".$fields['Year']."</label></td>
                   <td><label>".$fields['Semister']."</label></td>


                   <td><img src=".$fields['Image']."></td>
                    <td><a href='UpdateEmp.php'>Edit</a></td>
                    <td><a href='./EmployeePages/Emp-DDeleteForm.php?emp_id=".$fields['Staff_id']."'>Delete</a></td>

               </tr>";
      }
    }
  else
   {
    echo '<script type="text/javascript">alert("Sorry!..No Record Found Please Try again.")</script>';
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
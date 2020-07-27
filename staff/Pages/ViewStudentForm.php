
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Student Page</title>
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
.border .form table tr th label{color: tomato; font-weight: bold; font-family: serif; font-stretch: semi-expanded; font-size: 22px;}
.border .form input[type="text"]{padding: 5px;  }
</style>
<body >
<!-- Main -->
<?php
// Establish Connection with Database
$host = "localhost";
$user = "root";
$pw = "";
$db = "College_portal";
$conn = mysqli_connect($host , $user , $pw , $db);
 $retrive = "Select * from Staff_reg";
 $sql_retrive = mysqli_query($conn, $retrive);
 $field  = mysqli_fetch_assoc($sql_retrive);
?>
<div class="border">
    <div class="form">
      <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">

          <table width="100%" border="0" cellspacing="0" cellpadding="0">

            <h1 style="color: brown; text-decoration: underline;">View Students</h1>
              <tr>
                <td><label>Course</label></td>
                <td><span><label style="color: slateblue;"><?php echo $field['Department']?></label></span>
                </td>
                    
                <td><label>Year</label></td>
                <td><span><label style="color: slateblue;"><?php echo $field['Year']?></label></span>
                </td>
                <td><label>Sem</label></td>
                <td><span><label style="color: slateblue;"><?php echo $field['Semister']?></label></span>
                </td>
                <td><label>Select Subject</label></td>
                <td><select name="slct_sub" style="width: 80%;">
                      <option value="--select--">---Select Subject---</option>
                      <option value="<?php echo $field['Subject1']?>"><?php echo $field['Subject1']?></option>
                      <option value="<?php echo $field['Subject2']?>"><?php echo $field['Subject2']?></option>
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
    $sql = "select * from student_reg where Register_No='$Id' || First_name='$name' || Classs='$Department' ";
// Execute query
    $result = mysqli_query($conn,$sql);
    $record = mysqli_num_rows($result);
    
    if($record!=0)
    {
  ?>
    <table style="border: none; margin-top: -15px; align-content: center;" align="center" border="1" cellspacing="4" cellpadding="5"> 
      <tr>
        <th><label>Register No</label></th>
        <th><label>Name</label></th>
        <th><label>DOB</label></th>
        <th><label>Mobile No</label></th>
        <th><label>Class</label></th>
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
                   <td><label>".$fields['Register_No']."</label></td>
                   <td><label>".$fields['First_name']."</label></td>
                   <td><label>".$fields['DOB']."</label></td>
                   <td><label>".$fields['phone_no']."</label></td>
                   <td><label>".$fields['Classs']."</label></td>
                   <td><label>".$fields['Year']."</label></td>
                   <td><label>".$fields['Semister']."</label></td>
                   <td><img src=".$fields['Profile_image']."></td>
                   <td><a href='UpdateStudent.php'>Edit</a></td>
                   <td><a href='./StudentPages/S-DDeleteForm.php?reg_id=".$fields['Register_No']."'>Delete</a></td>
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
    $sql = "select * from student_reg  ";
// Execute query
    $result = mysqli_query($conn,$sql);
    $record = mysqli_num_rows($result);
    
    if($record!=0)
    {
  ?>
    <table style="border: none; margin-top: -15px; align-content: center;" align="center" border="1" cellspacing="4" cellpadding="5"> 
        <tr>
        <th><label>Register No</label></th>
        <th><label>Name</label></th>
        <th><label>DOB</label></th>
        <th><label>Mobile No</label></th>
        <th><label>Class</label></th>
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
                   <td><label>".$fields['Register_No']."</label></td>
                   <td><label>".$fields['First_name']."</label></td>
                   <td><label>".$fields['DOB']."</label></td>
                   <td><label>".$fields['phone_no']."</label></td>
                   <td><label>".$fields['Classs']."</label></td>
                   <td><label>".$fields['Year']."</label></td>
                   <td><label>".$fields['Semister']."</label></td>
                   <td><img src=".$fields['Profile_image']."></td>
                   <td><a href='UpdateStudent.php'>Edit</a></td>
                   <td><a href='./StudentPages/S-DDeleteForm.php?reg_id=".$fields['Register_No']."'>Delete</a></td>
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

<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SearchStudent Notice Page</title>
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
<div class="border">
    <div class="form">
      <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">

          <table width="100%" border="0" cellspacing="0" cellpadding="0">

            <h1 style="color: brown; text-decoration: underline;">Search Notice </h1>
              <tr>
                <td><label>Notice Id</label></td>
                <td><span>
                    <input type="text" name="txt_emp_nid" id="txt_emp_nid" placeholder="Enter Notice ID" /></span>
                </td>
                    
                <td><label>Date</label></td>
                <td><span >
                <input type="Date" name="txt_emp_ndate" id="txt_emp_ndate" format="mm-dd-yyyy"  />
                </span></td>
                   
                <<td><label>Title</label></td>
                <td><span>
                    <input type="text" name="txt_emp_ntitle" id="txt_emp_ntitle" placeholder="Enter Subject" /></span>
                </td>
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


    $Noticeid=$_POST['txt_emp_nid'];
    $Date=$_POST['txt_emp_ndate'];
    $title=$_POST['txt_emp_ntitle'];

    if($Noticeid!="" || $Date!="" || $title!="")
    {
// Specify the query to execute
    $sql = "select * from student_notice_box where Notice_ID='$Noticeid' || Notice_Date='$Date' || Title='$title' ";
// Execute query
    $result = mysqli_query($conn,$sql);
    $record = mysqli_num_rows($result);
    
    if($record!=0)
    {
  ?>
    <table style="border: none; margin-top: -15px; align-content: center; width: 98%;" align="center" border="1" cellspacing="4" cellpadding="5"> 
      <tr>
        <th><label>Notice Id</label></th>
        <th><label>Date</label></th>
        <th><label>Title</label></th>
        <th><label>Subejct</label></th>
        <th><label>Description</label></th>
      </tr>
    
  <?php
    while($fields = mysqli_fetch_assoc($result))
      {
         echo "<tr>
                   <td><label>".$fields['Notice_ID']."</label></td>
                   <td><label>".$fields['Notice_Date']."</label></td>
                   <td><label>".$fields['Title']."</label></td>
                   <td><label>".$fields['Subject']."</label></td>
                   <td><label>".$fields['Description']."</label></td>
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
    echo '<script type="text/javascript">alert("Please Enter Any One Field to Search!..")</script>';
  }
}
elseif(isset($_POST['listall']))
  {


   $Noticeid=$_POST['txt_emp_nid'];
    $Date=$_POST['txt_emp_ndate'];
    $title=$_POST['txt_emp_ntitle'];

   
// Specify the query to execute
    $sql = "select * from student_notice_box ";
// Execute query
    $result = mysqli_query($conn,$sql);
    $record = mysqli_num_rows($result);
    
    if($record!=0)
    {
  ?>
    <table style="border: none; margin-top: -15px; align-content: center; width: 98%;" align="center" border="1" cellspacing="4" cellpadding="5"> 
      <tr>
        <th><label>Notice Id</label></th>
        <th><label>Date</label></th>
        <th><label>Title</label></th>
        <th><label>Subejct</label></th>
        <th><label>Description</label></th>
      </tr>
    
  <?php
    while($fields = mysqli_fetch_assoc($result))
      {
          echo "<tr>
                   <td><label>".$fields['Notice_ID']."</label></td>
                   <td><label>".$fields['Notice_Date']."</label></td>
                   <td><label>".$fields['Title']."</label></td>
                   <td><label>".$fields['Subject']."</label></td>
                   <td><label>".$fields['Description']."</label></td>
               </tr>";
      }
    }
  else
   {
    echo '<script type="text/javascript">alert("Sorry!..No Record Availabe! Please Add New Notice."); window.location=\' M-S-Notice.php\'</script>';
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
              ["minlen=",  "Please Enter Notice Id "    ] ],
              [//New Password
              ["minlen=",    "Please Enter "    ] ] ];
              
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
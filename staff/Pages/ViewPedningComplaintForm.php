<?php
if(!$_SESSION)
{
  session_start();
}

 $y = date('y');
$a = "CMP";
$d = date('d');
$z = "0";
$cmp_id = $y.$a.$d.$z.mt_rand(100,999);
$m = date('m');
$y = date('y');
$cmpdate = $d."-".$m."-"."20".$y;
$date = $d."-".$m."-"."20".$y;
$host = "localhost";
$user = "root";
$pw = "";
$db = "college_portal";

$conn = mysqli_connect($host , $user , $pw ,$db);
$staffid = $_SESSION['User_name'];

$get_class = "Select * from staff_reg where Staff_id='$staffid' ";
$sql_class  = mysqli_query($conn , $get_class);
$rec = mysqli_num_rows($sql_class);
$res = mysqli_fetch_assoc($sql_class);
$name = $res['Name'];
$course = $res['Department'];
$yr = $res['Year'];
$sem1 = $res['Semister'];
$sem2 = $res['Sem2'];
$list_students =  "select * from student_reg where   Classs='$course' && Semister='$sem1' || Semister='$sem2' && Year = '$yr'";
?>



<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Complain Form</title>
    <link rel="stylesheet" type="text/css" herf="./css/12-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
  label {color: black; text-shadow: none;}
  button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
.border .form form table tr th  label{ color: red; }
.border .form table {text-shadow: none; border: solid 1px slateblue} 
h1{text-shadow: none;}
.border .form table select{width: 80%;}
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">

               <h1 style="margin-left: 0%; margin-top: 15px; font-family: serif;">Old Complaintss</h1>
             <form  name="form2" id="form1" method="POST"> 
                  <?php
                   $user_id = $_SESSION['User_name'];
                  $list =  "select * from complaint where   Lecturer_ID='$user_id'";
                  $check = mysqli_query($conn, $list);
                  $record = mysqli_num_rows($check);
                  
                  if($record!=0)
                  {
                ?>
                  <table style="float: left; width: 98%;border: none; padding: 2px;" border="1">
                  <h1 style="color: slateblue; float: left; margin-left: 50px;">Students of <?php echo $course;?>  <?php echo$yr;?> <?php echo$sem1?> and <?php echo $sem2; ?>   </h1>

                    <tr>
                      <th><label>CMP ID</label></th>
                      <th><label>Date</label></th>
                      <th><label>Register No</label></th>
                      <th><label>Course</label></th>
                      <th><label>Year</label></th>
                      <th><label>Category</label></th>
                      <th><label>Status</label></th>
                      <th><label>Delete</label></th>
                    </tr>

                  <?php 
                  while($field = mysqli_fetch_assoc($check))
                  {
                    echo " <tr>
                          <td><label>".$field['Register_No']."</label></td>
                          <td><label>".$field['Cmp_Daye']."</label></td>
                          <td><label>".$field['Register_No']."</label></td>
                          <td><label>".$field['Course']."</label></td>
                          <td><label>".$field['Year']."</label></td>
                          <td><label>".$field['Category']."</label></td>
                          <td><label>".$field['Status']."</label></td>
                          <td><label>".$field['Year']."</label></td>
                          </tr>";

                   }
                  } 
                  ?>
          </table>
      </form>
   </div>
 </div> <!-- /main -->

</body>
</html>

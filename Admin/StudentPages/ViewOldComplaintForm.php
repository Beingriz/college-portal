<?php
if(!$_SESSION)
{
  session_start();
}
$host = "localhost";
$user = "root";
$pw = "";
$db = "college_portal";
$conn = mysqli_connect($host , $user , $pw ,$db);
?>
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>old Complain Form</title>
    <link rel="stylesheet" type="text/css" herf="./css/12-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
  label {color: black; text-shadow: none;}
  button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
.border .form form table tr th  label{ color: white; }
.border .form form table tr th{background-color: slateblue; padding: 12px}
.border .form table {text-shadow: none; border: solid 1px slateblue} 
h1{text-shadow: none;}
.border .form table select{width: 80%;}
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">

               <h1 style="margin-left: 0%; margin-top: 15px; font-family: serif;">Old Complaints</h1>
             <form  name="form2" id="form1" method="POST"> 
                  <?php
                   $user_id = $_SESSION['User_name'];
                  $list =  "select * from complaint";
                  $check = mysqli_query($conn, $list);
                  $record = mysqli_num_rows($check);
                  
                  if($record!=0)
                  {
                ?>
                  <table style="float: left; width: 98%;border: none; padding: 2px;" border="1">
                  

                    <tr>
                      <th><label>CMP ID</label></th>
                      <th><label>Date</label></th>
                      <th><label>Register No</label></th>
                      <th><label>Course</label></th>
                      <th><label>Year</label></th>
                      <th><label>Category</label></th>
                      <th><label>Status</label></th>
                      <th><label>Open</label></th>
                      <th><label>Action</label></th>
                    </tr>

                  <?php 
                  while($field = mysqli_fetch_assoc($check))
                  {
                    echo " <tr>
                          <td><label>".$field['CMP_ID']."</label></td>
                          <td><label>".$field['Cmp_Date']."</label></td>
                          <td><label>".$field['Register_No']."</label></td>
                          <td><label>".$field['Course']."</label></td>
                          <td><label>".$field['Year']."</label></td>
                          <td><label>".$field['Category']."</label></td>
                          <td><label>".$field['Status']."</label></td>
                          <td><label><a href='OpenComplaint.php?id=".$field['CMP_ID']." && id2=".$field['Register_No']."'>View</a></label></td>
                          <td><label><a href='DeleteComplaint.php?id=".$field['CMP_ID']."'>Delete</a></label></td>

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

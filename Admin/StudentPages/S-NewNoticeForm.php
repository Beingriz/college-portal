<?php
if(!$_SESSION)
{
  session_start();
}

 $y = date('y');
$a = "MEMO";
$d = date('d');
$z = "0";
$Notice_id = $y.$a.$d.$z.mt_rand(100,999);
$m = date('m');
$y = date('y');

$date = $d."-".$m."-"."20".$y;
$host = "localhost";
$user = "root";
$pw = "";
$db = "college_portal";

$conn = mysqli_connect($host , $user , $pw ,$db);
if(isset($_POST['submit']))
{ 
  $user_id = $_SESSION['User_name'];
  $Note_id = $_POST['txt_notice_id'];
  $Ntitle = $_POST['txt_emp_title'];
  $Nsubject = $_POST['txt_emp_tsub'];
  $NDesc = $_POST['txt_emp_mater'];
  $status = "Pending";

  
     $query = "Insert into student_notice_box values('$Notice_id','$date','$Ntitle','$Nsubject','$NDesc','$status')";
            $sql = mysqli_query($conn,$query);  
            if($sql){
               echo '<script type="text/javascript">window.location=\'M-S-Notice.php\';</script>';
            }   
            else
            {
               echo '<script type="text/javascript">alert("Error!...Failed!.. Please Try Again.");</script>';
            }
    mysqli_close($conn);
  
}
?>



<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Notice </title>
    <link rel="stylesheet" type="text/css" herf="./css/7-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
  label {color: black;}
  button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
.border .form form table tr th  label{ background: slateblue; padding: 2px; font-size: 25px; color: white; }
.border .form form table tr th{ background: slateblue; padding:15px; color: white; }

</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">

               <h1 style="margin-left: 0%; margin-top: 15px; font-family: serif;">Add New Notice  To Student</h1>
                <input type="hidden" name="emp_regid"  id="emp_regid" value=""/>
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                 

                  <table width="78%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><label >Notice Id</label></td>
                      <td><label  style="color: green;"><?php echo $Notice_id;?></label></td>
                      <td><input type="hidden" name="txt_notice_id" id="txt_notice_id" value=" <?php echo $Notice_id;?> "></td>
                    </tr>

                    <tr>
                      <td><label >Notice Date</label></td>
                      <td><label  style="color: green;"><?php echo $date;?></label></td>
                    </tr>
                    <tr>
                      <td><label>Title</label></td>
                      <td><span id="sprytextfield1">
                          <input type="text" name="txt_emp_title" id="txt_emp_title" placeholder=" New Title"  onkeypress="return(event.charCode >64  &&  event.charCode > 91) ||(event.charCode >96 && event.charCode < 123) || event.keyCode == 32"></span>
                      </td>
                    </tr>
                    <tr>
                      <td><label>Subject</label></td>
                      <td><span id="sprytextfield2">
                      <input type="text" name="txt_emp_tsub" id="txt_emp_tsub" placeholder="Subject" onkeypress="return(event.charCode >64  &&  event.charCode > 91) ||(event.charCode >96 && event.charCode < 123) || event.keyCode == 32" />
                      </span></td>
                    </tr>
                    
                    <tr>
                      <td><label>Description</label></td>
                      <td><span id="sprytextarea3">
                        <textarea  name="txt_emp_mater" id="txt_emp_mater" cols="45" rows="5" placeholder="Description  "></textarea></span>
                       </td>
                    </tr>
                    <td><div style="position: relative; margin-top: 0px; margin-left: 100px;  float: left;" align="center">
                    <button align="center" type="submit" name="submit">Add Notice</button>
                    </div>
                  </td>
              </table>

              <form  name="form1" id="form1" method="POST"> 
                  <?php
                  $list =  "select * from student_notice_box";
                  $check = mysqli_query($conn, $list);
                  $record = mysqli_num_rows($check);
                  
                  if($record!=0)
                  {
                ?>
                  <table style="float: left; width: 98%;border: none; padding: 2px;" border="1">
                    <tr>
                      <th><label>Notice Id No</label></th>
                      <th><label>Date</label></th>
                      <th><label>Title </label></th>
                      <th><label>Subject</label></th>
                      <th><label>Description</label></th>
                      <th><label>Edit</label></th>
                      <th><label>Delete</label></th> 
                    </tr>

                  <?php 
                  while($field = mysqli_fetch_assoc($check))
                  {
                    echo " <tr>
                          <td><label>".$field['Notice_ID']."</label></td>
                          <td><label>".$field['Notice_Date']."</label></td>
                          <td><label>".$field['Title']."</label></td>
                          <td><label>".$field['Subject']."</label></td>
                          <td><label>".$field['Description']."</label></td>
                          <td><a href = 'UpdateStudentNotice.php?id=".$field['Notice_ID']."'>Edit</a></td>
                          <td><a href = 'DeleteStudentNotice.php?id=".$field['Notice_ID']."'>Delete</a></td>
                          </tr>";

                   }
                  } 
                  ?>
          </table>

</form>
      </form>
    </div>
 </div> <!-- /main -->
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
  var arrFormValidation=
            [ 
              [//
              ],
              [//Title 
              ["minlen=2",  "Please Enter Title"    ] ],
              [//Subject
              ["minlen=2",    "Please  Enter Subject"    ] ],
              [//Description
              ["minlen=2",    "Pleas Give Description"    ] ] ];
              
</SCRIPT>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea3 = new Spry.Widget.SpryValidationTextarea("sprytextarea3");


//-->
</script>
</body>
</html>

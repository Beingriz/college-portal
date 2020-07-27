<?php
if(!$_SESSION)
{
  session_start();
}

 $y = date('y');
$a = "HT";
$d = date('d');
$z = "0";
$Result_id = $y.$a.$d.$z.mt_rand(100,999);
$m = date('m');
$y = date('y');

$date = $d."-".$m."-"."20".$y;
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
<title>Student Result</title>
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

               <h1 style="margin-left: 0%; margin-top: 15px; font-family: serif;">Issue Hall Ticket</h1>
                <input type="hidden" name="emp_regid"  id="emp_regid" value=""/>
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                 <table width="70%" border="0" cellspacing="20" cellpadding="0">
                    <tr>
                      <td><label >ID</label>
                      <label  style="color: green;"><?php echo $Result_id; ?></label></td>
                      <td><label >Date</label>
                      <label  style="color: green;"><?php echo $date; ?></label></td>
                      <td><input type="hidden" name="txt_result_id" id="txt_result_id" value=" <?php echo $Result_id;?> "></td>
                    </tr>
                     <tr>
                      <td><label>Combination</label>
                                  <select name="res_course" >
                                  <option value="---Select---">---Select---</option>
                                  <option value="BCA">BCA</option>
                                  <option value="MCA">MCA</option>
                                  </select></td>
                       <td><label>Year</label>
                          <select name="res_year">
                                <option value="---Select---">---Select---</option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                </select></td>
                      
                            <td><label>Semister</label>
                            <select name="res_sem" >
                                <option value="---Select---">---Select---</option>
                                <option value="1st Sem">1st Sem</option>
                                <option value="2nd Sem">2nd Sem</option>
                                <option value="3rd Sem">3rd Sem</option>
                                <option value="4th Sem">4th Sem</option>
                                <option value="5th Sem">5th Sem</option>
                                <option value="6th Sem">6th Sem</option>
                                </select></td>
                      </tr>
                    <tr> 
                    <td><input style="color: green; width: 75%;" type="file" name="fileupload" id="fileupload"></td></tr>
                    <td><div style="position: relative; margin-top: 0px; margin-left: 0px;  float: left;" align="center">
                    <button align="center" type="submit" name="submit">Issue Hall Ticket</button>
                    </div>
                    </td>
              </table>
                    </form>
 
<?php
if(isset($_POST['submit']))
{ 
  $user_id = $_SESSION['User_name'];
  $res_course = $_POST['res_course'];
  $res_year = $_POST['res_year'];
  $res_sem = $_POST['res_sem'];
 $filename = $_FILES["fileupload"]["name"];
  $tempname = $_FILES["fileupload"]["tmp_name"];
  $folder = "C:\wamp64\www\College\Results/".$filename;
  move_uploaded_file($tempname, $folder);

  if($res_course!="---Select---" && $res_year!="---Select---" && $res_sem!="---Select---") 
  {
    if($folder!="" && $filename!="" && $tempname!="")
    {
     $query = "Insert into hall_ticekts values('$Result_id','$date','$res_course','$res_year','$res_sem','$folder')";
    $result_update =  "Update student_reg set HT_Path = '$folder' Where Classs = '$res_course' && Year = '$res_year' && Semister ='$res_sem' ";
            $sql = mysqli_query($conn,$query);  $sql2 = mysqli_query($conn, $result_update);
            if($sql && $sql2)
            {  
               echo '<script type="text/javascript">alert("Hall Ticket Issued Successfully!...");window.location=\'NewHT.php\';</script>';
            }   
            else
            {
               echo '<script type="text/javascript">alert("Error!...Failed!.. Please Try Again.");</script>';
            }
    }
    else
    {
               echo '<script type="text/javascript">alert("Please Select File To update Hall Ticket!....");</script>';
    }
  }
  else
  {
     echo '<script type="text/javascript">alert("Please Select Course Year and Sem !...");</script>';

  }
}

?>
              <form  name="form1" id="form1" method="POST"> 
                  <?php
                  $list =  "select * from hall_ticekts";
                  $check = mysqli_query($conn, $list);
                  $record = mysqli_num_rows($check);
                  
                  if($record!=0)
                  {
                ?>
                  <table style="float: left; width: 98%;border: none; padding: 2px;" border="1">
                    <tr>
                      <th><label> ID</label></th>
                      <th><label> Date</label></th>
                      <th><label>Corse</label></th>
                      <th><label>Year</label></th>
                      <th><label>Semister</label></th>
                      <th><label>Delete</label></th> 
                    </tr>

                  <?php 
                  while($field = mysqli_fetch_assoc($check))
                  {
                    echo " <tr>
                          <td><label>".$field['HT_ID']."</label></td>
                          <td><label>".$field['HT_Date']."</label></td>
                          <td><label>".$field['Course']."</label></td>
                          <td><label>".$field['Year']."</label></td>
                          <td><label>".$field['Semister']."</label></td>
                          <td><a href ='DeleteHT.php?id=".$field['HT_ID']." && Course=".$field['Course']." && Year=".$field['Year']." && id2=".$field['Semister']."'>Delete</a></td>
                          </tr>";

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

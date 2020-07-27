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
.border .form form table tr th  label{ background: slateblue; padding: 2px; font-size: 25px; color: white; }
.border .form form table tr th{ background: slateblue; padding:15px; color: white; }.border .form table {text-shadow: none; border: solid 1px slateblue} 
h1{text-shadow: none;}
.border .form table select{width: 80%;}
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">

               <h1 style="margin-left: 0%; margin-top: 15px; font-family: serif;">Raise New Complaint</h1>
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <?php ?>
                 <table width="60%" border="0" cellspacing="20" cellpadding="0">
                    <tr>
                      <td><label >ID</label>
                      <label  style="color: green;"><?php echo $cmp_id; ?></label></td>
                    
                      <td><label >Date</label>
                      <label  style="color: green;"><?php echo $date; ?></label></td>
                      <td><input type="hidden" name="txt_result_id" id="txt_result_id" value=" <?php echo $cmp_id;?> "></td>
                    </tr>
                     <tr>
                      <td><label>Register No</label>
                                  <select name="slt_regno" required="required">
                                    <option value="">---Select--</option>
                                  <?php
                                  $sql_list_students = mysqli_query($conn, $list_students);
                                  $student_row = mysqli_num_rows($sql_list_students);
                                  while($student_regno=mysqli_fetch_assoc($sql_list_students))
                                  {  echo "<option>".$student_regno['Register_No']."</option>";   } 
                                  ?>
                                  </select></td>
                    
                    
                      <td><label>Category</label>
                                  <select name="slt_ctgry" required="required">
                                  <option value="">--Select--</option>
                                  <option value="Regular Absent">Regular Absent</option>
                                  <option value="Miss Bihaviour">Miss Bihaviour</option>
                                  <option value="Notes Incomplete">Notes Incomplete</option>
                                  <option value="UnderPerformance">UnderPerformance</option>
                                  <option value="Arrogance">Arrogance</option>
                    </select></td>
                           
                     <td><label>Description</label>
                      <textarea name="txt_desc" id="txt_desc" cols="20" rows="3"></textarea></td>
                   </tr>

                    <tr> 
                    <td><div style="position: relative; margin-top: 0px; margin-left: 0px;  float: left;" align="center">
                    <button align="center" type="submit" name="submit">Register Complaint</button>
                    </div>
                    </td>
              </table>
                    </form>
 
<?php
if(isset($_POST['submit']))
{ 
  $user_id = $_SESSION['User_name'];
  $cmp_st_regno = $_POST['slt_regno'];
  $cmp_ctgry = $_POST['slt_ctgry'];
  $cmp_desc = $_POST['txt_desc'];
  $cmp_st_name=  "";
$cmp_st_sem = "";
     $query = "Insert into complaint values('$cmp_id','$cmpdate' ,'$user_id','$name','$cmp_st_regno','$course','$yr', '$cmp_ctgry','$cmp_desc','Pending')";
            $sql = mysqli_query($conn,$query); 
            if($sql)
            {  
               echo '<script type="text/javascript">alert("Complaint Raised  Successfully!...");</script>';
            }   
            else
            {
               echo '<script type="text/javascript">alert("Error!...Failed!.. Please Try Again.");</script>';
            }
}

?>
              <form  name="form2" id="form1" method="POST"> 
                  <?php
                   $user_id = $_SESSION['User_name'];
                  $list =  "select * from student_reg where   Classs='$course' && Semister='$sem1' || Semister='$sem2' && Year = '$yr'";
                  $check = mysqli_query($conn, $list);
                  $record = mysqli_num_rows($check);
                  
                  if($record!=0)
                  {
                ?>
                  <table style="float: left; width: 98%;border: none; padding: 2px;" border="1">
                  <h1 style="color: slateblue; float: left; margin-left: 50px;">Students of <?php echo $course;?>  <?php echo$yr;?> <?php echo$sem1?> and <?php echo $sem2; ?>   </h1>

                    <tr>
                      <th><label>Register No</label></th>
                      <th><label>Name</label></th>
                      <th><label>DOB</label></th>
                      <th><label>Corse</label></th>
                      <th><label>Year</label></th>
                      <th><label>Semister</label></th>
                    </tr>

                  <?php 
                  while($field = mysqli_fetch_assoc($check))
                  {
                    echo " <tr>
                          <td><label>".$field['Register_No']."</label></td>
                          <td><label>".$field['First_name']."</label></td>
                          <td><label>".$field['DOB']."</label></td>
                          <td><label>".$field['Classs']."</label></td>
                          <td><label>".$field['Year']."</label></td>
                          <td><label>".$field['Semister']."</label></td>
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

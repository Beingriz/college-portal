<?php
if(!$_SESSION)
{
  session_start();
}

 $y = date('y');
$a = "AS";
$d = date('d');
$z = "0";
$AS_id = $y.$a.$d.$z.mt_rand(100,999);
$m = date('m');
$y = date('y');
$ntdate = "20".$y."-".$m."-".$d;
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
?>



<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Notes</title>
    <link rel="stylesheet" type="text/css" herf="./css/12-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
  label {color: black; text-shadow: none;}
  button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
.border .form form table tr th  label{ background: slateblue; padding: 2px; font-size: 20px; color: white; }
.border .form form table tr th{ background: slateblue; padding:10px; color: white; }
.border .form table {border: solid 1px slateblue ; text-shadow: none;}
h1{text-shadow: none;}
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">

               <h1 style="margin-left: 0%; margin-top: 15px; font-family: serif;">Upload Assignment</h1>
                <input type="hidden" name="nts_date"  id="nts_date" value="<?php echo $ntdate;?>"/>
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <?php ?>
                 <table width="97%" border="0" cellspacing="20" cellpadding="0">
                    <tr>
                      <td><label >ID</label>
                      <label  style="color: green;"><?php echo $AS_id; ?></label></td>
                    </tr>
                    <tr>
                      <td><label >Date</label>
                      <label  style="color: green;"><?php echo $date; ?></label></td>
                      <td><input type="hidden" name="txt_result_id" id="txt_result_id" value=" <?php echo $AS_id;?> "></td>
                    </tr>
                     <tr>
                      <td><label>Combination</label>
                                  <select name="slt_department" required="required">
                                  <option value=" <?php echo $res['Department'];?>" ><?php echo $res['Department'];?></option>
                                  </select></td>
                      <td><label>Year</label>
                                  <select name="slt_year" required="required">
                                  <option value=" <?php echo $res['Year'];?>" ><?php echo $res['Year'];?></option>
                                  </select></td>
                      
                      <td><label>Semister</label>
                                  <select name="slt_sem" required="required">
                                  <option value=" <?php echo $res['Semister'];?>" ><?php echo $res['Semister'];?></option>
                                  <option value=" <?php echo $res['Sem2'];?>" ><?php echo $res['Sem2'];?></option>
                                  </select></td>
                      <td><label>Subject</label>
                                  <select name="slt_sub" required="required">
                                  <option value=" <?php echo $res['Subject1'];?>"><?php echo $res['Subject1'];?></option>
                                  <option value=" <?php echo $res['Subject2'];?>"><?php echo $res['Subject2'];?></option>
                    </select></td>
                      </tr>
                      <tr>
                        <td><label>Title</label>
                       <input type="text" name="txt-ass-title" id="txt-ass-title" placeholder="Enter Title"></td>
                     
                        <td><label>Deadline</label>
                        <input type="date" name="dt_ddline" id="dt_ddline" min="<?php echo $ntdate;?>" max="2019-12-01"></td>
                    
                      <td><label>Description</label>
                      <textarea name="txt_desc" id="txt_desc" cols="25" rows="5"></textarea></td>
                    <tr>
                    <td><input style="color: green; width: 100%; padding: 15px; margin: 15px; font-size: 22px" type="file" name="fileupload" id="fileupload"></td>
                  </tr>
                    <tr>
                    <td>
                      <div style="position: relative; margin-top: 0px; margin-left: 0px;  float: left; " align="center">
                      <button align="center" type="submit" name="submit">Upload Assignment</button>
                    </div>
                    </td>
                  </tr>
              </table>
                    </form>
 
<?php
if(isset($_POST['submit']))
{ 
  $user_id = $_SESSION['User_name'];
  $ass_course = $_POST['slt_department'];
  $ass_year = $_POST['slt_year'];
  $ass_sem = $_POST['slt_sem'];
  $ass_sub = $_POST['slt_sub'];
  $ass_title = $_POST['txt-ass-title'];
  $ass_ddline = $_POST['dt_ddline'];
  $ass_desc = $_POST['txt_desc'];
 $filename = $_FILES["fileupload"]["name"];
  $tempname = $_FILES["fileupload"]["tmp_name"];
  $folder = "C:\wamp64\www\College\Assignments/".$filename;
  move_uploaded_file($tempname, $folder);

  if($ass_course!="" && $ass_year!="" && $ass_sem!="" && $ass_title!="" && $ass_sub!="" && $ass_desc!="" && $ass_ddline!="") 
  {
    if($folder!="" && $filename!="" && $tempname!="")
    {
     $query = "Insert into assignment values('$AS_id', '$user_id','$name','$date','$ass_course','$ass_year','$ass_sem', '$ass_sub','$ass_title','$ass_ddline','$ass_desc','$folder')";
    $update_note =  "Update student_reg set   Assign_file = '$folder' Where Classs = '$ass_course' && Year = '$ass_year' &&  Semister ='$ass_sem' ";
            $sql = mysqli_query($conn,$query);  $sql2 = mysqli_query($conn, $update_note);
            if($sql && $sql2)
            {  
               echo '<script type="text/javascript">alert("Assignment Uploaded Successfully!...");window.location=\'NewAssignment.php\';</script>';
            }   
            else
            {
               echo '<script type="text/javascript">alert("Error!...Failed!.. Please Try Again.");</script>';
            }
    }
    else
    {
               echo '<script type="text/javascript">alert("Please Select  File To upload!....");</script>';
    }
  }
  else
  {
     echo '<script type="text/javascript">alert("Please Fill All Fields!...");</script>';

  }
}

?>
              <form  name="form1" id="form1" method="POST"> 
                  <?php
                   $user_id = $_SESSION['User_name'];
                  $list =  "select * from assignment where   Lecturer_ID='$user_id'";
                  $check = mysqli_query($conn, $list);
                  $record = mysqli_num_rows($check);
                  
                  if($record!=0)
                  {
                ?>
                  <table style="float: left; width: 98%;border: none; padding: 2px;" border="1">
                    <tr>
                      <th><label>ID No</label></th>
                      <th><label>Lecturer Name</label></th>
                      <th><label>Date</label></th>
                      <th><label>Corse</label></th>
                      <th><label>Year</label></th>
                      <th><label>Semister</label></th>
                      <th><label>Subject</label></th>
                      <th><label>Title</label></th>
                      <th><label>Submit Date</label></th>
                      <th><label>Edit</label></th> 
                      <th><label>Delete</label></th> 
                    </tr>

                  <?php 
                  while($field = mysqli_fetch_assoc($check))
                  {
                    echo " <tr>
                          <td><label>".$field['AS_ID']."</label></td>
                          <td><label>".$field['Lecturer_Name']."</label></td>
                          <td><label>".$field['Date']."</label></td>
                          <td><label>".$field['Course']."</label></td>
                          <td><label>".$field['Year']."</label></td>
                          <td><label>".$field['Semister']."</label></td>
                          <td><label>".$field['Subject']."</label></td>
                          <td><label>".$field['Title']."</label></td>

                          <td><label>".$field['DeadLine_Date']."</label></td>
                          <td><a href = 'EditAssignments.php?id=".$field['AS_ID']."'>Edit</a></td>
                          <td><a href = 'DeleteAssignments.php?id=".$field['AS_ID']." && Course=".$field['Course']." && Year=".$field['Year']." && id2=".$field['Semister']." &&  id3=".$field['Subject']."'>Delete</a></td>
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

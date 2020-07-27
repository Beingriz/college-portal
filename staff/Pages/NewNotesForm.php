<?php
if(!$_SESSION)
{
  session_start();
}

 $y = date('y');
$a = "Note";
$d = date('d');
$z = "0";
$Notes_id = $y.$a.$d.$z.mt_rand(100,999);
$m = date('m');
$y = date('y');
$ntdate = $d."-".$m."-"."20".$y;
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
.border .form form table tr th  label{ background: slateblue; padding: 2px; font-size: 22px; color: white; }
.border .form form table tr th{ background: slateblue; padding:15px; color: white; }.border .form table {text-shadow: none; border: solid 1px slateblue} 
h1{text-shadow: none;}
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">

               <h1 style="margin-left: 0%; margin-top: 15px; font-family: serif;">Upload New Notes</h1>
                <input type="hidden" name="nts_date"  id="nts_date" value="<?php echo $ntdate;?>"/>
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <?php ?>
                 <table width="70%" border="0" cellspacing="20" cellpadding="0">
                    <tr>
                      <td><label >ID</label>
                      <label  style="color: green;"><?php echo $Notes_id; ?></label></td>
                    </tr>
                    <tr>
                      <td><label >Date</label>
                      <label  style="color: green;"><?php echo $date; ?></label></td>
                      <td><input type="hidden" name="txt_result_id" id="txt_result_id" value=" <?php echo $Notes_id;?> "></td>
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
                    <td><input style="color: green; width: 75%;" type="file" name="fileupload" id="fileupload"></td></tr>
                    <td><div style="position: relative; margin-top: 0px; margin-left: 0px;  float: left;" align="center">
                    <button align="center" type="submit" name="submit">Upload Notes</button>
                    </div>
                    </td>
              </table>
                    </form>
 
<?php
if(isset($_POST['submit']))
{ 
  $user_id = $_SESSION['User_name'];
  $nt_course = $_POST['slt_department'];
  $nt_year = $_POST['slt_year'];
  $nt_sem = $_POST['slt_sem'];
  $nt_sub = $_POST['slt_sub'];
 $filename = $_FILES["fileupload"]["name"];
  $tempname = $_FILES["fileupload"]["tmp_name"];
  $folder = "C:\wamp64\www\College\Notes/".$filename;
  move_uploaded_file($tempname, $folder);

  if($nt_course!="" && $nt_year!="" && $nt_sem!="") 
  {
    if($folder!="" && $filename!="" && $tempname!="")
    {
     $query = "Insert into notes values('$Notes_id', '$user_id','$name','$ntdate','$nt_course','$nt_year','$nt_sem', '$nt_sub','$folder')";
    $update_note =  "Update student_reg set  Note_file = '$folder' Where Classs = '$nt_course' && Year = '$nt_year' &&  Semister ='$nt_sem' ";
            $sql = mysqli_query($conn,$query);  $sql2 = mysqli_query($conn, $update_note);
            if($sql && $sql2)
            {  
               echo '<script type="text/javascript">alert("Notes Uploaded Successfully!...");window.location=\'NewNotes.php\';</script>';
            }   
            else
            {
               echo '<script type="text/javascript">alert("Error!...Failed!.. Please Try Again.");</script>';
            }
    }
    else
    {
               echo '<script type="text/javascript">alert("Please Select Notes File To upload!....");</script>';
    }
  }
  else
  {
     echo '<script type="text/javascript">alert("Please Select All Fields!...");</script>';

  }
}

?>
              <form  name="form1" id="form1" method="POST"> 
                  <?php
                   $user_id = $_SESSION['User_name'];
                  $list =  "select * from notes where   Lecture_ID='$user_id'";
                  $check = mysqli_query($conn, $list);
                  $record = mysqli_num_rows($check);
                  
                  if($record!=0)
                  {
                ?>
                  <table style="float: left; width: 98%;border: none; padding: 2px;" border="1">
                    <tr>
                      <th><label>Notes ID</label></th>
                      <th><label>Lecturer Name</label></th>
                      <th><label>Date</label></th>
                      <th><label>Corse</label></th>
                      <th><label>Year</label></th>
                      <th><label>Semister</label></th>
                      <th><label>Subject</label></th>
                      <th><label>Edit</label></th>
                      <th><label>Delete</label></th> 
                    </tr>

                  <?php 
                  while($field = mysqli_fetch_assoc($check))
                  {
                    echo " <tr>
                          <td><label>".$field['Notes_ID']."</label></td>
                          <td><label>".$field['Lecturer_Name']."</label></td>
                          <td><label>".$field['Date']."</label></td>
                          <td><label>".$field['Course']."</label></td>
                          <td><label>".$field['Year']."</label></td>
                          <td><label>".$field['Semister']."</label></td>
                          <td><label>".$field['Subject']."</label></td>
                          <td><a href = 'EditNotes.php?id=".$field['Notes_ID']."'>Edit</a></td>
                          <td><a href = 'DeleteNotes.php?id=".$field['Notes_ID']." && Course=".$field['Course']." && Year=".$field['Year']." && id2=".$field['Semister']." &&  id3=".$field['Subject']."'>Delete</a></td>
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

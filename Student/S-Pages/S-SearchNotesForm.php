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
$stid = $_SESSION['User_name'];

$get_class = "Select * from student_reg where Register_No='$stid' ";
$sql_class  = mysqli_query($conn , $get_class);
$rec = mysqli_num_rows($sql_class);
$res = mysqli_fetch_assoc($sql_class);
$crs = $res['Classs'];
$yr = $res['Year'];
$sem = $res['Semister'];

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
.border .form form table tr th  label{ color: red; }
.border .form table {text-shadow: none; border: solid 1px slateblue} 
h1{text-shadow: none;}
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">

               <h1 style="margin-left: 0%; margin-top: 15px; font-family: serif;">Search Notes</h1>
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <?php ?>
                 <table width="70%" border="0" cellspacing="20" cellpadding="0">
                    <tr>
                      <td><label >ID</label>
                      <label  style="color: green;"><?php echo $stid; ?></label></td>
                    </tr>
                    
                     <tr>
                      <td><label>Course</label>
                                  <select name="slt_department" required="required">
                                  <option value="<?php echo $res['Classs'];?>" ><?php echo $res['Classs'];?></option>
                                  </select></td>
                      <td><label>Year</label>
                                  <select name="slt_year" required="required">
                                  <option value="<?php echo $res['Year'];?>" ><?php echo $res['Year'];?></option>
                                  </select></td>
                      
                      <td><label>Semister</label>
                                  <select name="slt_sem" required="required">
                                  <option value="<?php echo $res['Semister'];?>" ><?php echo $res['Semister'];?></option>
                                  </select></td>
                      <td><label>Subject</label>
                                  <select name="slt_sub" required="required">
                                  <option value="">---select---</option>
                                  <?php
                                  $sub = "select * from subjects where Course='$crs' && Year = '$yr' && Sem = '$sem'";
                                  $sql_sub = mysqli_query($conn, $sub);
                                  while($sub_fied=mysqli_fetch_assoc($sql_sub))
                                  {
                                    echo "<option value=".$sub_fied['Sub_Name'].">".$sub_fied['Sub_Name']."</option>";
                                  }

                                 ?>
                      </select></td>
                   </tr>
                   <tr> 
                   <td><div style="position: relative; margin-top: 0px; margin-left: 0px;  float: left;" align="center">
                    <button align="center" type="submit" name="submit">Search</button>
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
 
  $search_notes = "Select * from notes Where Course='$crs' && Year='$yr' &&  Semister='$sem' && Subject='$nt_sub'";
  $sql_search_notes =  mysqli_query($conn , $search_notes);
  $record = mysqli_num_rows($sql_search_notes);
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
    <th><label>Download</label></th> 
  </tr>
  <?php 
    while($field = mysqli_fetch_assoc($sql_search_notes))
    {
    echo " <tr>
           <td><label>".$field['Notes_ID']."</label></td>
           <td><label>".$field['Lecturer_Name']."</label></td>
           <td><label>".$field['Date']."</label></td>
           <td><label>".$field['Course']."</label></td>
           <td><label>".$field['Year']."</label></td>
           <td><label>".$field['Semister']."</label></td>
           <td><label>".$field['Subject']."</label></td>
           <td><a href ='downloadfile.php?file=".$field['Notes_file']."'>Download</a></td>
           </tr>";

    }
  }
else
{
  echo '<script type=text/javascript>alert("Sorry!.. No Notes Available");</script>';
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

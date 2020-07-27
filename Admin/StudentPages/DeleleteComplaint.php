
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Old Complaints</title>
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
.border .form input[type="text"]{padding: 5px;  }
</style>
<body >
  <?php
  $host = "localhost";
   $user = "root";
   $pw = "";
   $db = "College_portal";
   $conn = mysqli_connect($host , $user , $pw , $db);
   $regn=$_GET['id2'];
  $cmpid = $_GET['id'];
  $retrive = "Select * from Complaint where CMP_ID='$cmpid'";
  $sql = mysqli_query($conn, $retrive);
  $row = mysqli_num_rows($sql);
  $field = mysqli_fetch_assoc($sql);
  ?>
<!-- Main -->
<div class="border">
    <div class="form">
      <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">

          <table width="70%" border="0" cellspacing="5" cellpadding="0">
            <h1>Complaint By Staff </h1>
                    <tr>
                      <td><label >Complaint ID</label></td>
                      <td><label  style="color: slateblue;"><?php echo $field['CMP_ID'];?></label></td>
                      <td><input type="hidden" name="txt_cmp_id" id="txt_cmp_id" value=" <?php echo $field['CMP_ID'];?> "></td>

                      <td><label >Complaint Date</label></td>
                      <td><label  style="color: slateblue;"><?php echo $field['Cmp_Date']?></label></td>
                    </tr>
                    <tr>
                      <td><label >Lecturer ID</label></td>
                      <td><label  style="color: slateblue;"><?php echo $field['Lecturer_ID'];?></label></td>
                      <td><input type="hidden" name="txt_cmp_id" id="txt_cmp_id" value=" <?php echo $field['Lecturer_ID'];?> "></td>

                      <td><label >Lecturer Name</label></td>
                      <td><label  style="color: slateblue;"><?php echo $field['Lecturer_Name']?></label></td>
                    </tr>
                  </table>
              <table width="70%" border="0" cellspacing="10" cellpadding="0">
                    <tr>
                      <td><label >Student ID</label></td>
                      <td><label  style="color: slateblue;"><?php echo $field['Register_No']?></label></td>
                          <td><input type="hidden" name="txt_stregno" id="txt_stregno" value=" <?php echo $field['Register_No'];?> "></td></span>
                      </td>
                      <?php
                      $get_student = "select * from student_reg where Register_No='$regn'";
                      $sql_get_student = mysqli_query($conn, $get_student);
                      $st_field  = mysqli_fetch_assoc($sql_get_student);
                      ?>
                    </tr>
                    <tr>
                      <td><label >Studnet Name</label></td>
                      <td><label  style="color: red;"><?php echo $st_field['First_name']?></label></td>
                      </td>
                      <td><label >Course</label></td>
                      <td><label  style="color: slateblue;"><?php echo $st_field['Classs']?></label></td>
                      </td>
                    </tr>
                    <tr>
                      <td><label >Year</label></td>
                      <td><label  style="color: slateblue;"><?php echo $st_field['Year']?></label></td>
                      </td>
                    
                      <td><label >Semister</label></td>
                      <td><label  style="color: slateblue;"><?php echo $st_field['Semister']?></label></td>
                      </td>
                    </tr>
                    <tr>
                      <td><label >Mobile No</label></td>
                      <td><label  style="color: slateblue;"><?php echo $st_field['phone_no']?></label></td>
                      </td>
                      <td><label >Email</label></td>
                      <td><label  style="color: slateblue;"><?php echo $st_field['Email']?></label></td>
                      </td>
                    </tr>
                    
                    <tr>
                      <td><label >Complaint For</label></td>
                      <td><label  style="color: red;"><?php echo $field['Category']?></label></td>
                      </td>
                    </tr>
                    <tr>
                      <td><label >Report</label></td>
                      <td><label  style="color: red;"><?php echo $field['Description']?></label></td>
                      </td>
                    </tr>
                    <tr>
                      <td><label>Action</label></td>
                      <td><select name="slt_action" id="slt_action" >
                          <option>--Select--</option>
                          <option value="Resolved">Resolved</option>
                          <option value="Resticated">Resticated</option>
                          <option value="Cleared">Cleared</option>
                      </select></td>
                    </tr>
                    <td><div style="position: relative; margin-top: 0px; margin-left: 100px;  float: left;" align="center">
                    <button align="center" type="submit" name="Update">Action</button>
                    </div>
                  </td>

              </table>





</form>
<?php
 if(isset($_POST['Update']))
  {
    $action = $_POST['slt_action'];
// Specify the query to execute
      $sql = "update Complaint Set Status='$action' where CMP_ID ='$cmpid' ";
// Execute query
       $result = mysqli_query($conn,$sql);
        if($result)
        {
            echo '<script type="text/javascript"> alert(" Resolved Successfully!... ");window.location=\'ViewComplaint.php\';</script>';

        }
        else
        {
            echo '<script type="text/javascript"> alert("Unable to Resolv ")</script>';

        }
    }
?>
</table>
</form>
    
    </div>
 </div> <!-- /main -->
</body>
</html>
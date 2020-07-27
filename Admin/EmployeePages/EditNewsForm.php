
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit News</title>
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
  $newsId = $_GET['id'];
  $retrive = "Select * from web_news where slno='$newsId'";
  $sql = mysqli_query($conn, $retrive);
  $row = mysqli_num_rows($sql);
  $field = mysqli_fetch_assoc($sql);
  ?>
<!-- Main -->
<div class="border">
    <div class="form">
      <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">

          <table width="50%" border="0" cellspacing="0" cellpadding="0">
            <h1>Edit News</h1>
                    

                    <tr>
                      <td><label >News Date</label></td>
                      <td><label  style="color: red;"><?php echo $field['Date']?></label></td>
                    </tr>
                    
                    
                    
                    <tr>
                      <td><label>Description</label></td>
                     <td><span id="sprytextfield3">
                      <input type="text" name="txt_emp_tdesc" id="txt_emp_tdesc" value=" <?php echo $field['Description'];?> " />
                      </span></td>
                    </tr>
                    <td><div style="position: relative; margin-top: 0px; margin-left: 100px;  float: left;" align="center">
                    <button align="center" type="submit" name="Update">Update NEws</button>
                    </div>
                  </td>

                                </table>





</form>
<?php
 if(isset($_POST['Update']))
  {


    $desc = $_POST['txt_emp_tdesc'];

    
// Specify the query to execute
      $sql = "update web_news Set  Description = '$desc' where slno ='$Noticeid' ";
// Execute query
       $result = mysqli_query($conn,$sql);
        if($result)
        {
            echo '<script type="text/javascript"> alert(" Notice Updated Successfully!... ");window.location=\'WebsiteNotice.php\';</script>';

        }
        else
        {
            echo '<script type="text/javascript"> alert("Unable to Update News ")</script>';

        }
    }
  }
?>
</table>
</form>
    
    </div>
 </div> <!-- /main -->

</body>
</html>
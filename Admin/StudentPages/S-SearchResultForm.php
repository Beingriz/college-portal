
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Search Result</title>
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
.border .form form table tr th label{padding: 5px; color: violet;  }

</style>
<body >
  <?php
  $host = "localhost";
   $user = "root";
   $pw = "";
   $db = "College_portal";
   $conn = mysqli_connect($host , $user , $pw , $db);
  ?>
<!-- Main -->
<div class="border">
    <div class="form">
          <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
            <h1>Search Availabe Results</h1>
                 <table width="80%" border="0" cellspacing="20" cellpadding="0">
                    <tr>
                      <td><label >Result ID</label></td>
                      <td><input type="text" name="res_id" id="res_id" placeholder=" Enter Result Id"></td>
                      <td><label >Result Date </label></td>
                      <td><input type="text" name="res_date" id="res_date" placeholder="DD-MM-YYYY"></td>
                    </tr>
                   
                    
                    <td><div style="position: relative; margin-top: 0px; margin-left: 0px;  float: left;" align="center">
                    <button align="center" type="submit" name="Search">Search</button>
                    </div>
                    </td>
              </table>
       </form>
       <form>
<?php
 if(isset($_POST['Search']))
{ 
  $user_id = $_SESSION['User_name'];
  $res_id  = $_POST['res_id'];
  $res_date = $_POST['res_date'];

    if($res_id!="" || $res_date!="" ) 
  {
    
// Specify the query to execute
    $search = "select * from result Where Result_ID='$res_id' || Result_Date='$res_date'";
    $sql = mysqli_query($conn, $search);
    $record = mysqli_num_rows($sql);
    if($record!=0)
    {
    ?>
    <table style="border: none; width: 98%;" border="1">
      <tr>
        <th><label>ID</label></th>
        <th><label>Date</label></th>
        <th><label>Course</label></th>
        <th><label>Year</label></th>
        <th><label>Semister</label></th>
      </tr>
<?php
      while($field=mysqli_fetch_assoc($sql))
      {
        echo "<tr>
        <td><label>".$field['Result_ID']."</label></td>
        <td><label>".$field['Result_Date']."</label></td>
        <td><label>".$field['Course']."</label></td>
        <td><label>".$field['Year']."</label></td>
        <td><label>".$field['Semister']."</label></td>
      </tr> ";
      }
    }
    else
    {
    echo '<script type="text/javascript">alert("Sorry No record Forund ...")</script>'; 
    }
  }
  else
  {
    echo '<script type="text/javascript">alert("Please Enter ID or Date to Search Results!....")</script>'; 
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
              [//Old Password 
              ["minlen=",  "Please Enter Staff ID "    ] ],
              [//New Password
              ["minlen=",    "Please Enter Name"    ] ] ];
              
</SCRIPT>
<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");


//-->
</script>
</body>
</html>
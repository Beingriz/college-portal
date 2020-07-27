
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
.border .form form table tr th label{padding: 20px; color: white;  }
.border .form form table tr th{background-color: slateblue;padding: 12px;}
.border .form form table tr td label{padding: 20px;  }

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
            <h1>Search Availabe Hall Ticket</h1>
                 <table width="80%" border="0" cellspacing="20" cellpadding="0">
                   <tr>
                      <td><label>Combination</label>
                                  <select name="res_course" >
                                  <option value="--select--">--Select Course--</option>
                                  <option value="BCA">BCA</option>
                                  <option value="MCA">MCA</option>
                                  </select></td>
                       <td><label>Year</label>
                          <select name="res_year">
                                <option value="--select--">--Select Year--</option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                </select></td>
                      
                            <td><label>Semister</label>
                            <select name="res_sem" >
                                <option value="--select--">--Select Sem--</option>
                                <option value="1st Sem">1st Sem</option>
                                <option value="2nd Sem">2nd Sem</option>
                                <option value="3rd Sem">3rd Sem</option>
                                <option value="4th Sem">4th Sem</option>
                                <option value="5th Sem">5th Sem</option>
                                <option value="6th Sem">6th Sem</option>
                                </select></td>
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
  $res_course  = $_POST['res_course'];
  $res_year = $_POST['res_year'];
  $res_sem = $_POST['res_sem'];


    if($res_course!="--select--" && $res_year!="--select--" &&$res_sem!="--select--" ) 
  {
    
// Specify the query to execute
    $search = "select * from hall_ticekts Where Course='$res_course' && Year='$res_year' && Semister='$res_sem'";
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
        <th><label>Download</label></th>
      </tr>
<?php
      while($field=mysqli_fetch_assoc($sql))
      {
        echo "<tr>
        <td><label>".$field['HT_ID']."</label></td>
        <td><label>".$field['HT_Date']."</label></td>
        <td><label>".$field['Course']."</label></td>
        <td><label>".$field['Year']."</label></td>
        <td><label>".$field['Semister']."</label></td>
        <td><label><a href='downloadfile.php?".$field['HT_Path']."'>Download</a></label></td>
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

</body>
</html>
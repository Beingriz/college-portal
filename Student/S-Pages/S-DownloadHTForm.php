
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Download Hall Tickets</title>
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
<form>
<?php
// Specify the query to execute
    $reg = $_SESSION['User_name'];
    $result = "select * from Student_reg where Register_No = '$reg' && HT_Path!='NO Hall Ticket' ";
    $sql_result = mysqli_query($conn, $result);
    $record = mysqli_num_rows($sql_result);
  
    if($record!=0)
    {
    ?>
    <table style="border: none; width: 98%;" border="1">
       <tr>
        <th><label>Register No</label></th>
        <th><label>Name</label></th>
        <th><label>Course</label></th>
        <th><label>Year</label></th>
        <th><label>Semister</label></th>
        <th><label>Download</label></th>
      </tr>
<?php
      while($field=mysqli_fetch_assoc($sql_result))
      {
        echo "<h1> Dear  ".$field['First_name']." </h1>";echo "<h2 style='color:slateblue;text-shadow:none; '>All the Best Mr. ".$field['First_name']." Please Download Yor  '".$field['Classs']." ----  ".$field['Semister']." ' Hall Ticket</h2>"; 
        echo "<tr>
        <td><label>".$field['Register_No']."</label></td>
        <td><label>".$field['First_name']."</label></td>
        <td><label>".$field['Classs']."</label></td>
        <td><label>".$field['Year']."</label></td>
        <td><label>".$field['Semister']."</label></td>
        <td><label><a href='downloadfile.php?file=".$field['HT_Path']."'>Download</a></label></td>
        </tr> ";
      }
    }
    else
    {
    echo '<script type="text/javascript">alert("Sorry!...No Hall Ticket is Issued.. Please Try After Some Days ...");window.location=\'Download.php\';</script>'; 
    }
?>
    </table>
</form>
    
    </div>
 </div> <!-- /main -->

</body>
</html>
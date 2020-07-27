
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Notice Page</title>
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
   $N_ID = $_GET['id'];
   $open = "Select * from Staff_notice_box where Notice_ID='$N_ID'";
   $sql_open = mysqli_query($conn, $open);
   $record = mysqli_num_rows($sql_open);
   $field = mysqli_fetch_assoc($sql_open);
?>

<!-- Main -->
<div class="border">
    <div class="form">
<form method="POST">
    <table width="78%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><label >Notice Id</label></td>
                      <td><label  style="color: green;"><?php echo $N_ID;?></label></td>
                      <input type="hidden" name="notice_id"  id="notice_id" value="<?php echo $field['Notice_ID'];?>">
                    </tr>

                    <tr>
                      <td><label >Notice Date</label></td>
                      <td><label  style="color: green;"><?php echo $field['Notice_Date'];?></label></td>
                    </tr>
                    <tr>
                      <td><label>Title</label></td>
                      <td><span>
                         <label><?php echo $field['Title'];?></label></span>
                      </td>
                    </tr>
                    <tr>
                      <td><label>Subject</label></td>
                      <td><span>
                      <label><?php echo $field['Subject'];?></label>
                      </span></td>
                    </tr>
                    
                    <tr>
                      <td><label>Description</label></td>
                      <td><span>
                       <label><?php echo $field['Description'];?></label>
                       </td>
                    </tr>
                    <td><div style="position: relative; margin-top: 0px; margin-left: 100px;  float: left;" align="center">
                    </div></td>
                    <tr>
                      
                    </tr>


                    <tr>
                      <td><label> <a href="ViewNotice.php" style="font-size: 25px">close</a></label></td>
                    </tr>
              </table>


</form>

    
    </div>
 </div> <!-- /main -->

</body>
</html>
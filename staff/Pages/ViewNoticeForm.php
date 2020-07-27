
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Notice</title>
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
.border .form form table tr th  label{ background: slateblue; padding: 2px; font-size: 25px; color: white; }
.border .form form table tr th{ background: slateblue; padding:15px; color: white; }
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
    $View = "select * from Staff_notice_box ";
    $View_unread = "select * from Staff_notice_box ";
    $sql = mysqli_query($conn, $View_unread);
    $count = mysqli_num_rows($sql);
    $sql = mysqli_query($conn, $View);
    $record = mysqli_num_rows($sql);
    if($record!=0)
    {
    ?>
    <table style="border: none; width: 98%;" border="1">
      <h1>Total Notice  Availabe = <?php echo $count?> </h1>
      
      <tr>
        <th><label>Notice ID</label></th>
        <th><label>Date</label></th>
        <th><label>Title</label></th>
        <th><label>Subject</label></th>
        <th><label>Action</label></th>
      </tr>
<?php
      while($field=mysqli_fetch_assoc($sql))
      {
        echo "<tr>
        <td><label>".$field['Notice_ID']."</label></td>
        <td><label>".$field['Notice_Date']."</label></td>
        <td><label>".$field['Title']."</label></td>
        <td><label>".$field['Subject']."</label></td>
        <td><label><a href='OpenNotice.php?id=".$field['Notice_ID']."'>View</a></label></td>
      </tr> ";
      }
    }
    else
    {
    echo '<script type="text/javascript">alert("Sorry No record Forund ...")</script>'; 
    }
?>
    </table>
</form>
    
    </div>
 </div> <!-- /main -->

</body>
</html>
<?php
if(!$_SESSION)
{
  session_start();
}

 $y = date('y');
$a = "News-";
$d = date('d');
$z = "0";
$m = date('m');
$y = date('y');
$newsId = $y.$a.$m.mt_rand(100,999);
$date = $d."-".$m."-"."20".$y;
$host = "localhost";
$user = "root";
$pw = "";
$db = "college_portal";
$conn = mysqli_connect($host , $user , $pw ,$db);
if(isset($_POST['submit']))
{ 
  $NDesc = $_POST['txt_emp_mater'];
  $News_type = $_POST['slct_news_type'];

  if($NDesc!="")
  {
     $query = "Update web_news set Date='$date',Description='$NDesc' where Type='$News_type'";
            $sql = mysqli_query($conn, $query);  
            if($sql)
            {
               echo '<script type="text/javascript">window.location=\'WebsiteNotice.php\';</script>';
            }   
            else
            {
               echo '<script type="text/javascript">alert("Error!...Failed!.. Please Try Again.");</script>';
            }
  }
  else
  {
    echo '<script type="text/javascript">alert("Please Enter The News To Update!....");</script>';
  } 
}
mysqli_close($conn);
?>



<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>News & Updates </title>
    <link rel="stylesheet" type="text/css" herf="./css/7-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
  label {color: black;}
  button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
.border .form form table tr th  label{ background: slateblue; padding: 2px; font-size: 25px; color: white; }
.border .form form table tr th{ background: slateblue; padding:15px; color: white; }

</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">

               <h1 style="margin-left: 0%; margin-top: 15px; font-family: serif;">Update News</h1>
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                 

                  <table width="78%" border="0" cellspacing="0" cellpadding="0">
                    
                    <tr>
                      <td><label >Notice Date</label></td>
                      <td><label  style="color: green;"><?php echo $date;?></label></td>
                    </tr>
                    <tr>
                      <td><label>Type</label></td>
                      <td><select name="slct_news_type" id="slct_news_type">
                        <option value="--select--">---Select Type---</option>
                        <option value="Important">Important</option>
                        <option value="Latest">Latest</option>
                        <option value="Normal">Normal</option>
                      </select></td>
                    </tr>
                                      
                    <tr>
                      <td><label>Description</label></td>
                      <td><span id="sprytextarea3">
                        <textarea  name="txt_emp_mater" id="txt_emp_mater" cols="85" rows="5" placeholder="Description  "></textarea></span>
                       </td>
                    </tr>
                    <td><div style="position: relative; margin-top: 0px; margin-left:0px;  float: left;" align="center">
                    <button align="center" type="submit" name="submit">Update News</button>
                    </div>
                  </td>
              </table>
          </form>
          <form  name="form1" id="form1" method="POST"> 
            <?php
            $host = "localhost";
            $user = "root";
            $pw = "";
            $db = "college_portal";
            $conn = mysqli_connect($host , $user , $pw ,$db);
            $list1 = "SELECT `Type`, `Date`, `Description` FROM `web_news`";
            $check1 = mysqli_query($conn, $list1);
                         
            if($check1)
            {
            ?>
            <table style="float: left; width: 98%;border: none; padding: 2px;" border="1">
              <tr>
              <th><label>Sl No</label></th>
              <th><label>Date</label></th>
              <th><label>News</label></th>
              </tr>
            <?php 
            while($field = mysqli_fetch_assoc($check1))
            {
            echo " <tr>
                   <td><label>".$field['Type']."</label></td>
                   <td><label>".$field['Date']."</label></td>
                   <td><label>".$field['Description']."</label></td>
                   </tr>";
            }
          } 
         ?>
         </table>

</form>

    </div>
 </div> <!-- /main -->

</body>
</html>

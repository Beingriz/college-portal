<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display:flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
    background-color: dodgerblue;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>
</head>
<body>

<form action="#" style="max-width:500px;margin:auto" method="POST">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Enter Name" name="name">
  </div>

<div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="User Name" name="u_name">
  </div>
<div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

 <div class="input-container"> 
  <i class="fa fa-user icon"></i>
  <select style="width: 100%" class="dropdown-menue" name="u_type">
          <option name="User" value="--select--">---Select---</option>
          <option name="User" value="Admin">Admin</option>
          <option name="User" value="Staff">Staff</option>
          <option name="User" value="Student">Student</option>
        </select>
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="image Path" name="img">
  </div>

  <button type="submit" name="submit" class="btn">Register</button>
</form>

</body>
</html>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "college_portal";
  
  $con = mysqli_connect($host, $user, $password , $db);

 if(isset($_POST['submit']))
  {
  $nme = $_POST['name'];
  $uname = $_POST['u_name'];
  $pw = $_POST['psw'];
  $utype = $_POST['u_type'];
  $img = $_POST['img'];


 
      $sql = "Insert into admin values('$uname','$utype','$nme','Not Available','Not Available','Not Available','Not Available','Not Available','Not Available','Not Available','Not Available','Not Available','$img')";
      $sql2 = "Insert into login1 values('$nme','$uname','$pw','$utype','$img','0')";
    $result1 = mysqli_query($con, $sql);
    $result2 = mysqli_query($con, $sql2);
      if ($result1&&$result2) 
      {
       echo '<script type="text/javascript">alert("Congratss!...Admin ID Created");window.location=\'index.php\';</script>';
      }
      else
      {
         echo '<script type="text/javascript">alert("Failed to Create Admin!....please Try Again");</script>';
      }
  }


?>
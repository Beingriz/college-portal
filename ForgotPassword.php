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
table{border:solid 1px slateblue; font-size: 25px; margin-left: 33%; margin-top: 3%; position: relative;}
table label{color: green}
</style>
</head>
<body>

<form action="#" style="max-width:500px;margin:auto" method="POST">
  <h2>Forgot Password Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Enter User ID" name="id" required="required">
  </div>

<div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Name" name="name" required="required">
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Mobile No" name="mobile_no" required="required">
  </div>
   <div class="input-container"> 
  <i class="fa fa-user icon"></i>
 <td><select style="width: 100%" class="dropdown-menue" name="usertype" required="required">
                            <option name="User" value="">User Type</option>
                            <option name="User" value="Admin">Admin</option>
                            <option name="User" value="Staff">Staff</option>
                            <option name="User" value="Student">Student</option>
                          </select></td>
</div>
 <div class="input-container"> 
  <i class="fa fa-user icon"></i>
  <select style="width: 100%" class="dropdown-menue" name="Seq_question" required="required">
          <option name="User" value="">---Select---</option>
        <option value="What is Favorit Color?">What is Favorit Color?</option>
                          <option value="In Which City You Born?">In Which City You Born?</option>
                          <option value="Your First Vehical?">Your First Vehical?</option>
        </select>
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Answer " name="seq_answer">
  </div>

  <button type="submit" name="submit" class="btn">Submit</button>
</form>
</body>
</html>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "college_portal";
  
  $conn = mysqli_connect($host, $user, $password , $db);

 if(isset($_POST['submit']))
{  $id=$_POST['id'];

  $uname=$_POST['name'];
  $mbno = $_POST['mobile_no'];
  $sq=$_POST['Seq_question'];
  $sa = $_POST['seq_answer'];
  $ustype =$_POST['usertype'];
  if($ustype=="--select--")
      {
        echo '<script type="text/javascript">alert("Please Select User Type");window.location=\'index.php\';</script>';
      }
      
      elseif($ustype=="Admin")
      {
            $query = "select * from admin where  Admin_id='$id' && User_Type='$ustype' &&  Name='$uname' &&  Mobile='$mbno' && Sequrity_question='$sq' && Answer='$sa'";
            $result = mysqli_query($conn,$query);
            $total = mysqli_num_rows($result);
            $field = mysqli_fetch_assoc($result);
            $uid = $field['Admin_id'];
            $nm = $field['Name'];
            $type = $field['User_Type'];
          

             if ($total==0)
                {
                    echo '<script type="text/javascript">alert("Sorry No Record Found!.. Please Try Again");</script>';
                }
 
                else
                {   $get_pass = "select * from login1 Where Name='$nm' && User_name='$uid' &&  User_type='$type'  ";
                  $sql_get_pass = mysqli_query($conn, $get_pass);
                  $count = mysqli_num_rows($sql_get_pass);
                  $get_pass_row = mysqli_fetch_assoc($sql_get_pass);

                   echo "<table cellpadding='2' cellspacing='15'>

                                <tr>
                                  <td><label>Congratulations!.. Mr.".$get_pass_row['Name']." Your Password is  </label></td>
                                </tr>
                                <tr>
                                  <td><label style='font-size:30px; text-decoration:underline;' >'".$get_pass_row['Password']."'</label></td>
                                </tr>
                        
                        <td><label><a href='index.php'>Login</a></label></td>
                        </table> ";
                } 
                mysqli_close($conn);
      }
           
          elseif($ustype=="Staff")
           {
            $query = "select * from staff_reg where   Staff_id='$id' &&   Name='$uname' &&    Mobile_no='$mbno' && Seq_Question='$sq' && Ansswer='$sa'";
            $result = mysqli_query($conn,$query);
            $total = mysqli_num_rows($result);
            $field = mysqli_fetch_assoc($result);
            $uid = $field['Staff_id'];
            $nm = $field['Name'];
           
          

             if ($total==0)
                {
                    echo '<script type="text/javascript">alert("Sorry No Record Found!.. Please Try Again");</script>';
                }
 
                else
                {   $get_pass = "select * from login1 Where Name='$nm' && User_name='$uid' &&  User_type='$ustype'  ";
                  $sql_get_pass = mysqli_query($conn, $get_pass);
                  $count = mysqli_num_rows($sql_get_pass);
                  $get_pass_row = mysqli_fetch_assoc($sql_get_pass);

                   echo "<table cellpadding='2' cellspacing='15'>

                                <tr>
                                  <td><label>Congratulations!.. Mr.".$get_pass_row['Name']." Your Password is  </label></td>
                                </tr>
                                <tr>
                                  <td><label style='font-size:30px; text-decoration:underline;' >'".$get_pass_row['Password']."'</label></td>
                                </tr>
                        
                        <td><label><a href='index.php'>Login</a></label></td>
                        </table> ";
                } 
                mysqli_close($conn);
      }
            elseif($ustype=="Student")
            {
            $query = "select * from Student_reg where  Register_No='$id' && First_name='$uname' &&    phone_no='$mbno' && Seq_Question='$sq' && Answer='$sa'";
            $result = mysqli_query($conn,$query);
            $total = mysqli_num_rows($result);
            $field = mysqli_fetch_assoc($result);
            $uid = $field['Register_No'];
            $nm = $field['First_name'];
            
          

             if ($total==0)
                {
                    echo '<script type="text/javascript">alert("Sorry No Record Found!.. Please Try Again");</script>';
                }
 
                else
                {   $get_pass = "select * from login1 Where Name='$nm' && User_name='$uid' &&  User_type='$ustype'  ";
                  $sql_get_pass = mysqli_query($conn, $get_pass);
                  $count = mysqli_num_rows($sql_get_pass);
                  $get_pass_row = mysqli_fetch_assoc($sql_get_pass);

                   echo "<table cellpadding='2' cellspacing='15'>

                                <tr>
                                  <td><label>Congratulations!.. Mr.".$get_pass_row['Name']." Your Password is  </label></td>
                                </tr>
                                <tr>
                                  <td><label style='font-size:30px; text-decoration:underline;' >'".$get_pass_row['Password']."'</label></td>
                                </tr>
                        
                        <td><label><a href='index.php'>Login</a></label></td>
                        </table> ";
                } 
                mysqli_close($conn);
      }
  }
   
 ?>

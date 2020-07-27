<?php
$host="localhost";
$user="root";
$Password="";
$db="College_portal";

$conn = mysqli_connect($host,$user, $Password,$db);
$user_profile = $_SESSION['User_name'];
 $query = "select * from Login1 where User_name='$user_profile'";
  $result = mysqli_query($conn,$query);
   $data =  mysqli_fetch_assoc($result);
?>


<aside class="sidebar">
  <div class="widget">
    
    <h3  class="widgettitle"><?php  echo $data['Name']; ?></h3>
   
    <img style="margin-left: 45px;" src="<?php  echo $data['Images']; ?>" width="150px;" height="200px;">
  </div>
          <div class="widget">
            <h3 class="widgettitle">Profile</h3>
            <ul>
              <li><a href="ViewProfile.php">View Profile</a></li>
              <li><a href="UpdateProfile.php">Update</a></li>
              <li><a href="ChangePassword.php">Change Password</a></li>
              <li><a href="logout.php">Logout</a></li>

            </ul>
          </div>
          <div class="widget">
            <h3 class="widgettitle">Menu</h3>
            <ul>
              <li><a href="NewNotes.php">Notes</a></li>
              <li><a href="NewAssignment.php">Assignment</a></li>
              <li><a href="ViewNotice.php">View Notice</a></li>
              <li><a href="NewComplaint.php">Complaints</a></li>
            </ul>
          </div>

        </aside>
        <div class="cl">&nbsp;</div> 
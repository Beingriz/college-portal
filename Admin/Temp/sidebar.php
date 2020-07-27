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
    <h3 style="font-weight: bolder; color: black; text-decoration: none;">Welcome <?php  echo $data['Name']; ?></h3>
   
    <img src="<?php  echo $data['Images']; ?>" width="150px;" height="200px;">
  </div>
          <div class="widget">
            <h3 class="widgettitle">Profile</h3>
            <ul>
              <li><a href="AdminProfile.php">View Profile</a></li>
              <li><a href="AdminProfileUpdate.php">Update</a></li>
              <li><a href="AdminProfileCP.php">Change Password</a></li>
            </ul>
          </div>
          <div class="widget">
            <h3 class="widgettitle">college</h3>
            <ul>
              <li><a href="StudentModule.php">Student</a></li>
              <li><a href="StaffModule.php">Staff</a></li>
              <li><a href="NoticeModule.php">Notice</a></li>
              <li><a href="ResultModule">Results</a></li>
              <li><a href="ViewComplaint.php">View Complaint</a></li>
              <li><a href="WebsiteNotice.php">News Updates</a></li>
            </ul>
          </div>

        </aside>
        <div class="cl">&nbsp;</div> 
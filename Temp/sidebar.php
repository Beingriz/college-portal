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
              <li><a href="master.php">View Profile</a></li>
              <li><a href="#">View Results</a></li>
              <li><a href="#">Update Profile</a></li>
            </ul>
          </div>
          <div class="widget">
            <h3 class="widgettitle">college</h3>
            <ul>
              <li><a href="#">link1</a></li>
              <li><a href="#">Link2 </a></li>
              <li><a href="#">Link3</a></li>
              <li><a href="#">Lonk4 </a></li>
              <li><a href="#">Link5 </a></li>
            </ul>
          </div>

        </aside>
        <div class="cl">&nbsp;</div> 
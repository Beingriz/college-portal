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
    <h3 class="widgettitle" style="font-weight: bolder; color: white; text-decoration: none;"><?php  echo $data['Name']; ?></h3>
   
    <img src="<?php  echo $data['Images']; ?>" width="150px;" height="200px;">
  </div>
          <div class="widget">
            <h3 class="widgettitle">Profile</h3>
            <ul>
              <li><a href="Student-Profile.php">View Profile</a></li>
              <li><a href="Student-profileUpdate.php">Update</a></li>
              <li><a href="Student-ProfileCP.php">Change Password</a></li>
            </ul>
          </div>
          <div class="widget">
            <h3 class="widgettitle">college</h3>
            <ul>
              <li><a href="SearchNotes.php">Notes</a></li>
              <li><a href="Student-SearchResult.php">Results</a></li>
              <li><a href="SearchHallticket.php">Hall Ticket</a></li>
              <li><a href="Student-Notice.php">Notice</a></li>
              <li><a href="ViewFees.php">Fees</a></li>
            </ul>
          </div>

        </aside>
        <div class="cl">&nbsp;</div> 
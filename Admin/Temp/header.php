    <?php
    
    session_start();
echo "wlcome";
     ?>
<body>
     <style>
       label{color:lightgray; font-size: 22px; font-weight: bold;

       }

     </style>
   </body>
      <div class="header">
        <div class="socials"> 
         <a href="#" class="facebook-ico">facebook-ico</a> 
         <a href="#" class="twitter-ico">twitter-ico</a> 
         <a href="#" class="you-tube-ico">you-tube-ico</a>
        </div>
<!-- navigation -->
        <nav id="navigation">
          <ul>
            <li><a href="M-Admin-Home.php">Home</a></li>
            <li><a href="StudentModule.php">Student</a></li>
            <li><a href="StaffModule.php">Employee</a></li>
            <li><a href="UpdateModule.php">Update</a></li>
            <li><a href="SearchModule.php">Search</a></li>
            <li><a href="logout.php">Logout</a></li>
            <label style=" "><?php echo "Admin ID:". $_SESSION['User_name']; ?></label>
          </ul>
      </nav>
    <div class="cl">&nbsp;</div>
  </div>
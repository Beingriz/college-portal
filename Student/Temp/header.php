    <?php
    
    session_start();
echo "wlcome";
     ?>
<body>
     <style>
       label{color: yellow; font-size: 22px; font-weight: bold;

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
            <li><a href="M-Student-Home.php">Home</a></li>
            <li><a href="Search.php">Search</a></li>
            <li><a href="view.php">View</a></li>
            <li><a href="Download.php">Download</a></li>
            <li><a href="logout.php">Logout</a></li>
            <label style="color: lightgray "><?php echo "Register No ". $_SESSION['User_name']; ?></label>
          </ul>
      </nav>
    <div class="cl">&nbsp;</div>
  </div>
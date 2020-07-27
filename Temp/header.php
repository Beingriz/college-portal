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
            <li><a href="M-Home.php">Home</a></li>
            <li><a href="M-student.php"> Student </a></li>
            
            <li><a href="M-staff.php">Staff</a></li>
            <li><a href="#">table Example</a></li>
            <li><a href="#">Latest  Update</a></li>
            <li><a href="index.php">Logout</a></li>
            <label style=" "><?php echo "User ID ". $_SESSION['User_name']; ?></label>
          </ul>
      </nav>
    <div class="cl">&nbsp;</div>
  </div>
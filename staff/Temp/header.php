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
            <li><a href="M-Staff-Home.php">Home</a></li>o
            <li><a href="NewNotes.php">Notes</a></li>
            <li><a href="NewAssignment.php">Assignment</a></li>
            <li><a href="logout.php">Logout</a></li>
            <label style="color: lightgray "><?php echo "Employee ID :". $_SESSION['User_name']; ?></label>
          </ul>
      </nav>
    <div class="cl">&nbsp;</div>
  </div>
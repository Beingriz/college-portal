<!DOCTYPE html>
<html>
<meta name="viewport" content="width=90% , intial-scale=1">
<?php include('./Temp/css.php'); ?>
<head>
  <title>Student Master Page</title>
</head>
<body>
<div id="wrapper"> 
   <div class="shell">
           <?php include('./Temp/logo.php'); ?>
           <!--Header & Navigation Bar Page-->
            <?php include('./Temp/header.php'); ?>
       

             <!---Main Content of Page Begins-->
                  <div class="main">
                      <section class="content">
                          <div class="post">
                              <div class="post-inner">
                                <header>
                                  <h2 style="color: yellow; width: 35%;"> Student Department</h2>
                                      <div class="header">
                                        <a href="ResultModule.php">Result</a><p>|</p>
                                        <a href="NewHT.php">Hall Ticket</a><p>|</p>
                                        <a href="M-S-Notice.php">Notice</a><p>|</p>
                                        <a href="DeleteStudent.php">Delete</a><p>|</p>
                                        <a href="M-SearchStudent.php">Search</a><p>|</p>
                                         <a href="UpdateStudent.php">Update</a><p>|</p>
                                        <a href="M-S-New.php">Add New</a><p>|</p>
                                      </div>
                                      <div class="cl">&nbsp;</div>
                                </header>
                              <div class="content-area">      
                                <div class="row1">
  		             		                <div class="column1">
    				                            <?php include('studentModulepage.php'); ?>                 
  				                            </div>
			                           </div>
                              </div>
                              </div>
                         </div>
                    </section>
                  </div>
  <!-- Side Bar Page -->     

<?php include('./temp/sidebar.php');?>
<!-- footer Page --> 
 <?php include('./temp/footer.php'); ?>
</div>
</div>
</body>
</html>

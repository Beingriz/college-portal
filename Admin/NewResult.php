<!DOCTYPE html>
<html>
<meta name="viewport" content="width=90% , intial-scale=1">
<!--css Page included-->
 <?php include('./Temp/css.php'); ?>
<head>
  <title>Result Page</title>
  
<!--link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css"-->
</head>
<body>
<div id="wrapper"> 
   <div class="shell">
          <!--Portal Logo page -->
          <?php include('./Temp/logo.php'); ?>
           <!--Header & Navigation Bar Page-->
            <?php include('./Temp/header.php'); ?>
       

             <!---Main Content of Page Begins-->
                  <div class="main">
                      <section class="content">
                          <div class="post">
                              <div class="post-inner">
                                <header>
                                  <h2 style="color: yellow; width: 35%;"> <marquee class="marquee">Add New Result </marquee></h2>
                                      <div class="header">
                                        <a href="DeleteResult.php">Delete</a><p>|</p>
                                        <a href="UpdateResult.php">Update</a><p>|</p>
                                        <a href="SearchResult.php">Search Result</a><p>|</p>
                                         <a href="NewResult.php">New Result</a><p>|</p>
                                      </div>
                                      <div class="cl">&nbsp;</div>
                                </header>
                              <div class="content-area">      
                                <div class="row1">
  		             		                <div class="column1">
    				                            <?php include('studentRegForm.php'); ?>                 
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

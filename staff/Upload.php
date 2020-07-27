<!DOCTYPE html>
<html>
<meta name="viewport" content="width=90% , intial-scale=1">
<?php include('./Temp/css.php'); ?>
<head>
  <title>Mydemo</title>
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
                                  <h2 style="color: yellow;">Upload Section</h2>
                                      <div class="header">
                                        <a href="#">Notice</a><p>|</p>
                                        <a href="">Internal Marks</a><p>|</p>
                                        <a href="NewAssignment.php">Assingment</a><p>|</p>
                                        <a href="NewNotes.php">Notes</a><p>|</p>
                                      </div>
                                      <div class="cl">&nbsp;</div>
                                </header>
                              <div class="content-area">      
                                <div class="row1">
  		             		                <div class="column1">
    				                            <?php include('./slide-show/student-ss.php'); ?>                 
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

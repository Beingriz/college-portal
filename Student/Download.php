<!DOCTYPE html>
<html>
<meta name="viewport" content="width=90% , intial-scale=1">
<?php include('./Temp/css.php'); ?>
<head>
  <title>Download MasterPage</title>
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
                                  <h2 style="color: yellow;">Download Section</h2>
                                      <div class="header">
                                        <a href="Student-DownloadResult.php">Result Sheet</a><p>|</p>
                                        <a href="Student-DownloadHT.php">Hall Ticket</a><p>|</p>
                                        <a href="Student-DownloadResult1.php">Notes</a><p>|</p>
                                      </div>
                                      <div class="cl">&nbsp;</div>
                                </header>
                              <div class="content-area">      
                                <div class="row1">
  		             		                <div class="column1">
    				                            <?php include('DownloadHomePage.php'); ?>                 
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

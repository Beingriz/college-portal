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
                                  <h2 style="color: yellow; width: 35%;"> <marquee class="marquee">Update Staff Notice</marquee></h2>
                                      <div class="header">
                                         <a href="SearchEmpNotice.php">Search</a><p>|</p>
                                        <a href="M-Emp-Notice.php">Add New Notice</a><p>|</p>


                                      </div>
                                      <div class="cl">&nbsp;</div>
                                </header>
                              <div class="content-area">      
                                <div class="row1">
  		             		                <div class="column1">
    				                          <!--  <h2>Update Notice Form is Note Yet Desing</h2><br>
                                        <h2>Please Desing Emp-UpdateNoticeForm</h2>  -->
                                        <?php include('./EmoloyeePages/S-UpdateNoticeForm.php'); ?>             
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

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=90% , intial-scale=1">
<link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <link rel="stylesheet" type="text/css" herf="./css/4-12-style.css">
    <style type="text/css">
 .style1 { color: #000066;  font-weight: bold;}
    </style>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<?php include('./Temp/css.php'); ?>
<head>
  <title>Mydemo</title>
  
<!--link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css"-->
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
                                  <h2 style="color: yellow;"><marquee class="marquee">Search Student Details</marquee></h2>
                                      <div class="header">
                                        <a href="M-student-reg.php">New Registration</a><p>|</p>
                                        <a href="M-student-search.php">Search</a><p>|</p>
                                        <a href="">View Student</a><p>|</p>
                                      </div>
                                      <div class="cl">&nbsp;</div>
                                </header>
                              <div class="content-area">      
                                <div class="row1">
  		             		                <div class="column1">
    				                            <?php include('./JOBPORTAL/EmployerReg.php'); ?>                 
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

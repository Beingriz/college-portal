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
                                  <h2 style="color: yellow; width: 35%;"> <marquee class="marquee">Staff Search Section</marquee></h2>
                                      <div class="header">
                                      

                                      </div>
                                      <div class="cl">&nbsp;</div>
                                </header>
                              <div class="content-area">      
                                <div class="row1"> 
  		             		                <div class="column1">
                                      <!-- <b> Al-Ameen Institute</b>
                                        <p>Al-Ameen Institute of Information Sciences (AIIS) is the youngest institution to be run by the Al-Ameen Educational Society and has multi-lab and corporate training course with regular courses. The institute offers the two main courses of study. Bachelor of Computer Application (BCA), Master of Computer Application (MCA) approved by AICTE, New Delhi, Affiliated to Bangalore University and Recognized by Govt. Karnataka. </p> <br><br>

                                        <p>From modest beginnings the institute has now carved out a niche in the field of quality education. The unwavering commitment of the management to provide quality, value based education, professionally qualified and dedicated faculty and the state of art facilities have made Al-Ameen Institute of Information Sciences as one of the most sought after institutions for admissions by top ranking students from all parts of the country and abroad. Al Ameen institute provides an ambience that is most conducive to learning and personal growth. The versatility of academic programmes is unique to AIIS. A significant number of scholarships is offered to outstanding students on merit - cum - poverty basis. Many innovative teaching methods have been put in place, which includes online access to course material, access to digital libraries and international journals and so on.
                                              </p> -->
    				                           <?php include('./EmployeePages/Emp-SearchStaffForm.php'); ?>                 
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

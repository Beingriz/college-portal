<?php

$host="localhost";
$user="root";
$Password="";
$db="College_portal";

$conn = mysqli_connect($host,$user, $Password,$db);


if(isset($_POST['submit']))
{
 //personal Details elment names
  $fname = $_POST['txt_st_fname'];
  $lname  = $_POST['txt_st_lname'];
  $dob  = $_POST['s_dob'];
  $spno = $_POST['txt_st_mno'];
  $email  = $_POST['txt_st_email'];
  $address = $_POST['txt_st_add'];
  //$scountry = $_POST['s_country'];
  $sstate  = $_POST['s_state'];
  $scity = $_POST['s_city'];
  $pcode  = $_POST['txt_st_pin'];
  $gndr = $_POST['sgender'];
  
 // Parent Details Elements Name
  $f_name = $_POST['txt_st_fathername'];
  $m_name  = $_POST['txt_st_mothername'];
  $f_no = $_POST['txt_st_fmno'];
  $f_email  = $_POST['txt_st_femail'];
//Qualifiaction Details Elements Names
  $com  = $_POST['ad_comb'];
  $sec  = $_POST['ad_sec'];
  $yr  = $_POST['ad_yr'];
  $t_fee =  $_POST['txt_st_tfee'];
  $p_fee = $_POST['txt_st_pfee'];
  $b_fee =  $t_fee-$p_fee;

  // uniq iID Generation

 $y = date('y');
$a = "HUSAC";
$m = date('m');
$regid= $y.$a.$m.mt_rand(100,999);

    $sql1 = "Insert into student_reg values('$regid','$fname','$lname','$dob','$gndr','$spno','$email','$address','$sstate','$scity','$pcode', '$com','$yr','$sec','../images/12.png','No Question','No Answer','No Result','NO Hall Ticket', 'No Notes' ,'No Assignment')";
    $student = mysqli_query($conn, $sql1);  

    $sql2 = "Insert into student_parent values('$regid','$f_name','$m_name','$f_no','$f_email','$address','$sstate','$scity','$pcode')";
     $parent = mysqli_query($conn, $sql2);
    $update = "Insert into login1 values('$fname $lname','$regid','$regid','Student','../images/12.png','0')";
     $login = mysqli_query($conn, $update);

    $edu = "Insert into Student_fee values('$regid','$fname','$com','$yr','$sec','$t_fee','$p_fee','$b_fee')";
	$education = mysqli_query($conn, $edu);
    mysqli_close($conn);
         if(!$student)
         {
            echo '<script type="text/javascript">alert("Student Data Not Entered");</script>';
        }
      elseif (!$parent)
       {
          echo '<script type="text/javascript">alert("Parent Details Not Entered");</script>';
        }
      elseif (!$education) 
      {
        echo '<script type="text/javascript">alert("Qualifiaction Details not Saved!....");</script>';
        }
      else
        {
     echo '<script type="text/javascript">alert("Congratulations!. Student ID Created ...");window.location=\'StudentModule.php\';</script>';
        }
 }
  


?>
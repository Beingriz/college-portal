<?php

$host="localhost";
$user="root";
$Password="";
$db="College_portal";

$conn = mysqli_connect($host,$user, $Password,$db);


if(isset($_POST['submit']))
{
 //personal Details elment names
  $fname = $_POST['first_name'];
  $lname  = $_POST['last_name'];
  $dob  = $_POST['s_dob'];
  $spno = $_POST['phonno'];
  $email  = $_POST['email'];
  $address = $_POST['s_address'];
  $sstate  = $_POST['s_state'];
  $scity = $_POST['s_city'];
  $pcode  = $_POST['pincode'];
  $gndr = $_POST['gender'];
  $reg = $_POST['r_id'];
 // Parent Details Elements Name
  $f_name = $_POST['father_name'];
  $f_no  = $_POST['father_no'];
  $m_name  = $_POST['mother_name'];
  $m_no = $_POST['mother_no'];
  $f_email  = $_POST['father_email'];
  $p_add = $_POST['p_address'];
  $f_state  = $_POST['fstate'];
  $f_city = $_POST['fcity'];
  $f_pcode  = $_POST['fpincode'];
//Qualifiaction Details Elements Names
  $com  = $_POST['ad_comb'];
  $sec  = $_POST['ad_sec'];
  $yr  = $_POST['ad_yr'];
  $t_fee =  $_POST['totalfee'];
  $p_fee = $_POST['paidfee'];


  // uniq iID Generation
  
 // $y = date('y');
//$a = "HUSAC";
//$d = date('d');
//$st_reg = $y.$a.$d.mt_rand(1000,9999);

  if($f_name!="" && $f_no!=""&&$m_name!=""&& $m_no!="" &&$f_email!=""&&$p_add!=""&&$f_state!="--select--"&&$f_city!="--select--"&&$f_pcode!=""&&$com!="--select--" && $sec!="" &&$yr!=""&&$t_fee!=""&&$p_fee!="")
  {


    $sql1 = "Insert into student_reg values('$reg','$fname','$lname','$dob','$gndr','$spno','$email','$address','$sstate','$scity','$pcode')";
    $student = mysqli_query($conn, $sql1);  

    $sql2 = "Insert into student_parent_details values('$reg','$f_name','$f_no','$m_name','$m_no','$f_email','$p_add','$f_state','$f_city','$f_pcode')";
     $parent = mysqli_query($conn, $sql2);
    $update = "Insert into login1 values('$fname $lname','$reg','$reg','Student','No Image')";
     $login = mysqli_query($conn, $update);

    $edu = "Insert into qualification values('$reg','$com','$sec','$yr','$t_fee','$p_fee','0')";
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
     echo '<script type="text/javascript">alert("Congrats!....");window.location=\'M-student.php\';</script>';
        }
 }
  else
   {
     echo '<script type="text/javascript">alert("Please Fill All Field!....:);</script>';

   }   
}

?>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "college_portal"; 
$conn = mysqli_connect($host, $user , $password , $db);

$y = date('y');
$a = "EMP";
$m = date('m');
$emp_id = $y.$a.$m.mt_rand(100,999);

if(isset($_POST['submit']))

{
	$emp_name = $_POST['txt_emp_name'];
	$emp_dob = $_POST['txt_emp_dob'];
	$emp_doj = $_POST['txt_emp_doj'];
	$emp_no = $_POST['txt_emp_no'];
	$emp_email = $_POST['txt_emp_email'];
	$emp_add = $_POST['txt_emp_add'];
	$emp_country = $_POST['country'];
	$emp_state = $_POST['state'];
	$emp_city = $_POST['city'];
	$emp_pin = $_POST['txt_emp_pin'];
	$emp_qualifi = $_POST['slct_emp_quali'];
	$emp_spclin = $_POST['slct_emp_sub'];
	$emp_exprnc = $_POST['txt_emp_exp'];
	$emp_lwa = $_POST['slct_emp_lwa'];
	$emp_othr = $_POST['txt_emp_other'];
	$emp_departmet = $_POST['slct_emp_dptmnt'];
	$emp_departmet_yr = $_POST['slct_emp_dptmnt_yr'];
	$emp_departmet_sem = $_POST['slct_emp_dptmnt_sem'];
	$emp_departmet_sem2 = $_POST['slct_emp_dptmnt_sem2'];

	$emp_departmet_sub1 = $_POST['slct_emp_dptmnt_sub1'];
	$emp_departmet_sub2 = $_POST['slct_emp_dptmnt_sub2'];
	$emp_departmet_msg = $_POST['txt_emp_msg'];
	
	
	
	// Specify the query to Insert Record
	$query = "Insert Into staff_reg Values('$emp_id','$emp_doj','$emp_name','$emp_dob','$emp_no','$emp_email','$emp_add','$emp_country','$emp_state','$emp_city','$emp_pin','$emp_qualifi','$emp_spclin','$emp_exprnc','$emp_lwa','$emp_othr','$emp_departmet','$emp_departmet_yr','$emp_departmet_sem', '$emp_departmet_sem2' ,'$emp_departmet_sub1','$emp_departmet_sub2','$emp_departmet_msg','No Question','No Answer','../images/13.jpg')";

		$result = mysqli_query ($conn,$query);

		$sql =  "Insert into login1 Values('$emp_name','$emp_id','$emp_id','Staff','../images/13.jpg','0')";

	// execute query
	 $result1 = mysqli_query($conn, $sql);

		if(!$result)
		{
			echo '<script type="text/javascript">alert("Register Fail!.. Please try again");</script>';
		}
		elseif(!$result1)
		{
		echo '<script type="text/javascript">alert("login Not Created!...Please try again.. ");</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Congratulations!  Employee ID Created Sucessfully!..");window.location=\'StaffModule.php\';</script>';
		}
}

?>
<script type="text/javascript">
  functin chechk()
  var msg = document.getElementById('emp_regid');
  alert(msg);
</script>
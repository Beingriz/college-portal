<!DOCTYPE html>
<html>
<head>
	<title>UploadMasterForntPage</title>
</head>
<style type="text/css">
	.border .form .row .colun{ background: slateblue; }
	.border .form  table tr td label{font-family: serif; font-size: 22px; padding: 15px;  }
    .border .form  table tr td img{margin-left: 80px; margin-right: 15px; padding: px; width: 50px; height: 50px; align-content: center; }

	.border .form  table tr td label a{ color: slateblue; padding: 5px; margin-left: 15px;  }
	.border .form  table tr td label a:hover {display:block; color: green; font-size: 23px; }
	.border .form  table {margin-right: -5px; float: left; width: 300PX; border:none;height: 100px; background: lightgreen}
	.border .form  table:hover {font-size: 30px;}
	

</style>
<body>

	<?php
	$host = "localhost";
	$user = "root";
	$pw = "";
	$db = "college_portal";

	$conn = mysqli_connect($host , $user , $pw ,$db);

 $reg = $_SESSION['User_name'];
    $fees = "select * from Student_fee where Register_No = '$reg' ";
    $sql_fees = mysqli_query($conn, $fees);
    $record = mysqli_num_rows($sql_fees);
  $field=mysqli_fetch_assoc($sql_fees);

  $total_student_notice = "Select * from student_notice_box";
	$sql3 = mysqli_query($conn, $total_student_notice);
	$count_stu_notice =  mysqli_num_rows($sql3);

	?>
<div class="border" >
	<div class="form">
<div class="row">
	<div class="colun">
		<table style=" background:  tomato">
			<tr>
				<td><img src="../images/fees.png" ></td>
				
			</tr>
			<tr><td><label style="color: white">Balance Fees</label></td>
				<td><label style="font-family: serif; font-size: 30px;"><?php echo $field['Balance_fee'];?></label></td>
			</tr>
		</table>
		<table style=" background:  dodgerblue">
			<tr>
				<td><img src="../images/notice2.png" ></td>
				
			</tr>
			<tr><td><label style="color: white">Notice</label></td>
				<td><label style="font-family: serif; font-size: 30px;"><?php echo $count_stu_notice;?></label></td>
			</tr>
		</table>
		
		
		
		
		
	</div>
		
	</div>
</div>	



	
</div>

</body>
</html>
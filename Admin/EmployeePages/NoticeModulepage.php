<!DOCTYPE html>
<html>
<head>
	<title>UploadMasterForntPage</title>
</head>
<style type="text/css">
	<style type="text/css">
	.border .form .row .colun{ background: slateblue; }
	.border .form  table tr td label{font-family: serif; font-size: 22px; padding: 15px;  }
    .border .form  table tr td img{margin-left: 80px; margin-right: 15px; padding: px; width: 50px; height: 50px; align-content: center; }

	.border .form  table tr td label a{ color: slateblue; padding: 5px; margin-left: 15px;  }
	.border .form  table tr td label a:hover {display:block; color: green; font-size: 23px; }
	.border .form  table {margin-right: -5px; float: left; width: 250PX; border:none;height: 100px; background: lightgreen}
	.border .form  table:hover {font-size: 30px;}
	

</style>
</style>
<body>

	<?php
	$host = "localhost";
	$user = "root";
	$pw = "";
	$db = "college_portal";

	$conn = mysqli_connect($host , $user , $pw ,$db);

	$student_notice = "Select * from student_notice_box";
	$sql_student_notice = mysqli_query($conn, $student_notice);
	$count_student_notice =  mysqli_num_rows($sql_student_notice);


	$staff_notice = "Select * from staff_notice_box";
	$sql_staff_notice = mysqli_query($conn, $staff_notice);
	$count_staff_notice =  mysqli_num_rows($sql_staff_notice);

	$total = $count_student_notice+$count_staff_notice;

	$Pending_student_notice = "Select * from student_notice_box Where Status='Pending'";
	$sql_Pending_student_notice = mysqli_query($conn, $Pending_student_notice);
	$count_Pending_student_notice =  mysqli_num_rows($sql_Pending_student_notice);
	?>
<div class="border">
	<div class="form">
<div class="row">
	<div class="colun">
		<table style=" background:  tomato">
			<tr>
				<td><img src="../images/notice.png" ></td>
				<td><label style="color: white">Total Notice</label></td>
			</tr>
			<tr>
				<td><label style="font-family: serif; font-size: 30px;"><?php  echo $total?></label></td>
			</tr>
		</table>
		<table style=" background:  dodgerblue">
			<tr>
				<td><img src="../images/notice.png" ></td>
				<td><label style="color: white">Staff Notice</label></td>
			</tr>
			<tr>
				<td><label style="font-family: serif; font-size: 30px;"><?php  echo $count_staff_notice?></label></td>
			</tr>
		</table>
		<table style=" background:  green">
			<tr>
				<td><img src="../images/notice.png" ></td>
				<td><label style="color: white">Student Notice</label></td>
			</tr>
			<tr>
				<td><label style="font-family: serif; font-size: 30px;"><?php  echo $count_student_notice?></label></td>
			</tr>
		</table>
		
			
	</div>
		
	</div>
</div>	

	
</div>
</body>
</html>
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
	.border .form  table {margin-right: -5px; float: left; width: 250PX; border:none;height: 100px; background: lightgreen}
	.border .form  table:hover {font-size: 30px;}
	

</style>
<body>

	<?php
	$host = "localhost";
	$user = "root";
	$pw = "";
	$db = "college_portal";

	$conn = mysqli_connect($host , $user , $pw ,$db);

	$bca_student = "Select * from student_reg Where Classs='BCA'";
	$bca_sql = mysqli_query($conn, $bca_student);
	$bca_count =  mysqli_num_rows($bca_sql);

	$bca_staff = "Select * from staff_reg Where Department='BCA'";
	$bcas_sql = mysqli_query($conn, $bca_staff);
	$bcas_count =  mysqli_num_rows($bcas_sql);

	$mca_staff = "Select * from staff_reg Where Department='MCA'";
	$mcas_sql = mysqli_query($conn, $mca_staff);
	$mcas_count =  mysqli_num_rows($mcas_sql);


	$mca_student = "Select * from student_reg Where Classs='MCA'";
	$mca_sql = mysqli_query($conn, $mca_student);
	$mca_count =  mysqli_num_rows($mca_sql);


	$total_results = "Select * from result";
	$sql = mysqli_query($conn, $total_results);
	$count_result =  mysqli_num_rows($sql);

	$total_complaints = "Select * from Complaint";
	$sql = mysqli_query($conn, $total_complaints);
	$count_complaint =  mysqli_num_rows($sql);

	$total_staff_notice = "Select * from staff_notice_box";
	$sql2 = mysqli_query($conn, $total_staff_notice);
	$count_staff_notice =  mysqli_num_rows($sql2);


	$total_student_notice = "Select * from student_notice_box";
	$sql3 = mysqli_query($conn, $total_student_notice);
	$count_stu_notice =  mysqli_num_rows($sql3);

	$total_student_ht = "Select * from hall_ticekts";
	$sql3 = mysqli_query($conn, $total_student_ht);
	$count_stu_ht =  mysqli_num_rows($sql3);

	?>
<div class="border" >
	<div class="form">
<div class="row">
	<div class="colun">
		<table style=" background:  lightgreen">
			<tr>
				<td><img src="../images/download2.png" ></td>
				
			</tr>
			<tr><td><label style="color: white">Notes</label></td>
				<td><label style="font-family: serif; font-size: 30px;"><?php echo $count_complaint?></label></td>
			</tr>
		</table>
		<table style=" background:  orange">
			<tr>
				<td><img src="../images/download2.png"></td>
				
			</tr>
			<tr><td><label style="color: white">Hall Ticekts</label></td>
				<td><label style="font-family: serif; font-size: 30px;"><?php echo $count_stu_ht?></label></td>
			</tr>
		</table>
		<table style=" background:  mediumseagreen">
			<tr>
				<td><img src="../images/download2.png" ></td>
				
			</tr>
			<tr><td><label style="color: white">Result</label></td>
				<td><label style="font-family: serif; font-size: 30px;"><?php echo $count_result?></label></td>
			</tr>
		</table>
		
		
		
		
	</div>
		
	</div>
</div>	



	
</div>

</body>
</html>
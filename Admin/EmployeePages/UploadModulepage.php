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
<body>

	<?php
	$host = "localhost";
	$user = "root";
	$pw = "";
	$db = "college_portal";

	$conn = mysqli_connect($host , $user , $pw ,$db);

	$total_results = "Select * from result";
	$sql = mysqli_query($conn, $total_results);
	$count =  mysqli_num_rows($sql);


	$total_staff_notice = "Select * from staff_notice_box";
	$sql2 = mysqli_query($conn, $total_staff_notice);
	$count2 =  mysqli_num_rows($sql2);


	$total_student_notice = "Select * from student_notice_box";
	$sql3 = mysqli_query($conn, $total_student_notice);
	$count3 =  mysqli_num_rows($sql3);
	?>
<div class="border">
	<div class="form">
<div class="row">
	<div class="colun">
		<table style=" background:  slateblue">
			<tr>
				<td><img src="../images/info.png" ></td>
				
			</tr>
			<tr><td><label style="color: white">All Results</label></td>
				<td><label style="font-family: serif; font-size: 30px;"><?php  echo $count?></label></td>
			</tr>
		</table>
		<table style=" background:  orange">
			<tr>
				<td><img src="../images/notice.png" ></td>
			</tr>
			<tr>	
				<td><label style="color: white">Staff Notice</label></td>
				<td><label style="font-family: serif; font-size: 30px;"><?php  echo $count2?></label></td>
			</tr>
		</table>
		
		<table style=" background:  lightblue">
			<tr>
				<td><img src="../images/12.png" ></td>
			</tr>
			<tr>	
				<td><label style="color: white">Student Notice</label></td>
				<td><label style="font-family: serif; font-size: 30px;"><?php  echo $count3?></label></td>
			</tr>
		</table>
			<table style=" background:lightgray">
			<tr>
				<td><img src="../images/link1.png" ></td>
			</tr>
			<tr>	
				<td><label style="color: white">Hall Tickets</label></td>
				<td><label style="font-family: serif; font-size: 30px;"><?php  echo $count3?></label></td>
			</tr>
		</table>

		
	</div>
		
	</div>
</div>	



	
</div>

</body>
</html>
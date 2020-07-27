<?php
$host="localhost";
$user="root";
$Password="";
$db="College_portal";

$conn = mysqli_connect($host,$user, $Password,$db);
$user_Id = $_SESSION['User_name'];
 $query = "select * from student_reg where Register_No = '$user_Id'";
  $result = mysqli_query($conn,$query);
   $data =  mysqli_fetch_assoc($result);
   $state = $data['State'];
   $city = $data['City'];
   
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Profile</title>
</head>
<style type="text/css">
form .row .column{width: 81%;
 					height: 90%; 
 					float: left; border: 
 					solid black 1px;
  					margin: 5px; 
  					padding: 4px;
  					border-radius: 7px;
				}
table tr td label {color: black; text-decoration: none; text-shadow: none;  margin:5px;}


form .row : after{
			content: "";
			clear: both;
			display: table;
			}
 form{ margin: 0px; border:none; font-family: Raleway;  padding: 0px; align-content: center;}
	</style>
<body>
	<div class="border">
	
	<form action="#" method="POST">
	<div class="row">
  	    <div class="column" style="">
		
		<h1 style="color: green ; font-size: 35px; padding: 5px;text-shadow: none; margin: 5px;" align="center">Student Profile</h1>
		<h2><label style="color: red; text-shadow: none;">Reg ID:</label></h2>
		<h2><label style="color: green;font-size: 28px;text-shadow: none; " ><?php echo  $data['Register_No']; ?></label></td></h2>
			<table width="98%"  border="0" cellspacing="15" cellpadding="0">
				<tr>
					<td>
					
				</tr>
				<tr><span>
					<td><span><label >Name :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['First_name'];?></label></span></td>

					<td><span><label>DOB :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['DOB'];?></label></span></td>
				</tr>
				<tr><span>
					<td><span><label >Mobile No :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['phone_no'];?></label></span></td>

					<td><span><label>Emial:</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['Email'];?></label></span></td>
				</tr>
				<tr><span>
					<td><span><label >Address:</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['Address'];?></label></span></td>

					

					<td><span><label>Pin Code :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['Pincode'];?></label></span></td>
				</tr>
				<tr><span>
					<td><span><label >Question :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['Seq_Question'];?></label></span></td>

					<td><span><label>Answer :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['Answer'];?></label></span></td>
				</tr>

			</table>        
		</div>
	</div>		
	<div class="row">
	<div class="column" align="center" style="width: 17%; padding: 4px; border-radius: 7px; float: left;border: solid black 1px; margin: 5px;">
		<img width=" 98%" height="100%"src="<?php echo $data['Profile_image'];?>"
	</div>		
	</div>
	</form>

</div>
</body>
</html>
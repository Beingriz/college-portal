<?php
$host="localhost";
$user="root";
$Password="";
$db="College_portal";

$conn = mysqli_connect($host,$user, $Password,$db);
$user_profile = $_SESSION['User_name'];
 $query = "select * from admin where Admin_id='$user_profile'";
  $result = mysqli_query($conn,$query);
   $data =  mysqli_fetch_assoc($result);
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
		
		<h1 style="color: green ; font-size: 35px; padding: 5px;text-shadow: none; margin: 5px;" align="center">Admin Profile</h1>
			<table width="98%"  border="0" cellspacing="15" cellpadding="0">
				<tr>
					<td><label style="color: red;">Admin ID :</label>
					<label style="color: green;font-size: 28px;"><?php echo  $data['Admin_id']; ?></label></td>
				</tr>
				<tr><span>
					<td><span><label >Name :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['Name'];?></label></span></td>

					<td><span><label>DOB :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['DOB'];?></label></span></td>
				</tr>
				<tr><span>
					<td><span><label >Mobile No :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['Mobile'];?></label></span></td>

					<td><span><label>Emial:</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['Email'];?></label></span></td>
				</tr>
				<tr><span>
					<td><span><label >Address:</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['Address'];?></label></span></td>

					<td><span><label>State :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['State'];?></label></span></td>
				</tr>
				<tr><span>
					<td><span><label >City :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['City'];?></label></span></td>

					<td><span><label>Pin Code :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['Pin_Code'];?></label></span></td>
				</tr>
				<tr><span>
					<td><span><label >Question :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['Sequrity_question'];?></label></span></td>

					<td><span><label>Answer :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['Answer'];?></label></span></td>
				</tr>

			</table>        
		</div>
	</div>		
	<div class="row">
	<div class="column" align="center" style="width: 17%; padding: 4px; border-radius: 7px; float: left;border: solid black 1px; margin: 5px;">
		<img width=" 98%" height="100%"src="<?php echo $data['Image'];?>"
	</div>		
	</div>
	</form>

</div>
</body>
</html>
<?php
$host="localhost";
$user="root";
$Password="";
$db="College_portal";

$conn = mysqli_connect($host,$user, $Password,$db);
$user_Id = $_SESSION['User_name'];
 $query = "select * from staff_reg where Staff_id = '$user_Id'";
  $result = mysqli_query($conn,$query);
   $data =  mysqli_fetch_assoc($result);
   $state = $data['State'];
   $city = $data['City'];
   $Country = $data['Country'];
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
		
		<h1 style="color: green ; font-size: 35px; padding: 5px;text-shadow: none; margin: 5px;" align="center">Profile</h1>
		<h2><label style="color: red; text-shadow: none;">Reg ID:</label></h2>
		<h2><label style="color: green;font-size: 28px;text-shadow: none; " ><?php echo  $data['Staff_id']; ?></label></td></h2>
			<table width="98%"  border="0" cellspacing="15" cellpadding="0">
				<tr>
					<td>
					
				</tr>
				<tr><span>
					<td><span><label >Name :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['Name'];?></label></span></td>

					<td><span><label>DOB :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['DOB'];?></label></span></td>
				</tr>
				<tr><span>
					<td><span><label >Mobile No :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['Mobile_no'];?></label></span></td>

					<td><span><label>Emial:</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['Email'];?></label></span></td>
				</tr>
				<tr><span>
					<td><span><label >Address:</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['Adress'];?></label></span></td>

					<td><span><label>Country :</label></span></td>
					 <?php
                        $retrive = "select * from Countries where id='$Country' ";
                        $sql_query = mysqli_query($conn , $retrive);
                        $cntryname = mysqli_fetch_assoc($sql_query); 
                        ?>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $cntryname['name'];?></label></span></td>
				</tr>
					<td><span><label>State :</label></span></td>
					 <?php
                        $retrive = "select * from states where id='$state' ";
                        $sql_query = mysqli_query($conn , $retrive);
                        $sname = mysqli_fetch_assoc($sql_query); 
                        ?>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $sname['name'];?></label></span></td>
	
					<td><span><label >City :</label></span></td>
					<?php
                        $retrive = "select * from cities where id='$city' ";
                        $sql_query = mysqli_query($conn , $retrive);
                        $cname = mysqli_fetch_assoc($sql_query); 
                        ?>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $cname['name'];?></label></span></td>
				</span>
				</tr>
				<tr>
					<td><span><label>Pin Code :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['Pin_code'];?></label></span></td>
				
					<td><span><label >Question :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php  echo $data['Seq_Question'];?></label></span></td>
				</tr>
				<tr>
					<td><span><label>Answer :</label></span></td>
					<td><span><label style="color: blue; font-size: 20px;" ><?php echo $data['Ansswer'];?></label></span></td>
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
<!DOCTYPE html>
<html>
<meta  name="viewport" content="width=100%, initial-scale=1.0">
<head>
	<title>AIIS Home </title>
	<style>
	.wallpapsaer{	width: 100%; height: 7000px;	margin: 0 auto;	background: #F0FFFF;}

	.shell-1{ width: 1513px; height: auto; margin: 0 auto; }

		.web-header{
			margin: 5px;
			border: solid 2px white;
			background: slateblue;
			padding: 10px;
			border-radius: 8px;
			text-align: center;
	
		}

		.column{
			margin: 11px;
			width: 100%
			padding: 10px;
			float: left;
			border: solid 2px;
			height: 100%


		}

		.row : after{
			content: "";
			clear: both;
			display: table;
			

		}
		h1{
			padding: 10px;
			text-align: center;
			background-color:slateblue;
			border: none;
			border-radius: 2px;
			font-family: serif;
			font-weight: normal;
		}
		h3{
			font-size: 20px;
			color: white;
			padding: 0px;
		}

		h2{
			background: slateblue;
			color: yellow;
			text-align: center;
			margin: 15px;
			padding: 5px;
			border-radius: 5px;
			font-family: serif;
		}
		footer{
			padding: 0px;
			margin:0px;
			border-radius: 10px;
			float: left;
			align-self: center;
			width: 98%;
			border:solid 1px black;
			background: slateblue;
			margin-left: 15px;
		}
		.marquee
		{
			color: green;
			font-weight: bold;
			font-style: italic;
			font-size: 25px;
			
		}
		label p{text-align: justify; padding: 10px; font-family: serif; font-size: 24px; text-shadow: none; color: black;}
	</style>
</head>


<body>
<div class="wallpaper">
<div class="shell-1">

<div class="web-header">
	<h3> Welcome to Al-Ameen Institute of Information Sciences</h3> 
</div>

<!--Slide Show Section-->
<div class="row">
	<div class="column" style="width:75%; height: 400px; border-radius: 8px; position: relative; "> 
		<!--h2>Slide Show of College Interior Images</h2-->
		<img src="./images/aiis.jpg" style="width: 100%; height:100%; border-radius: 11px;">
				
	</div>
</div>

<!--Login Section-->

<div class="row">
	<div class="column" style="width: 20%;height: 380px; border-radius: 10px; border: solid 1px dodgerblue;">
		<div class="row">
			<div class="column"  style="margin: 5px; margin-top:10px; width: 97%; height: 80px;border-radius: 8px;">
				<img src="./images/college-logo.jpg" style="width: 100%; height:95px;">
				<!--marquee class="marquee">  Welcome to Al-Ameen Institite of Information Sciences.. Hosure Road Bangalore 560-027</marquee-->
			</div>
		</div>
		<div class="row">
			<div class="column"  style=" margin-top:50px;margin: 5px; width: 97%; height: 265px;border-radius: 8px;">
				<?php include('login.php'); ?>
				
			</div>
		</div>
	</div>
</div>

<!--Information of Department and Achievemnt Section-->

<div class="row">
	<div class="column" style=" margin-top: 0px; width: 75%;height: 420px; border-radius: 10px;">
			<h2> INSTITUTION | FOUNDER & CHAIRMEN | INFRASTRUCTURE | SPORTS ACTIVITIES</h2>
		<!--College Department Section-->

		<div class="row">
			<div class="column" style="margin-top: 10px; width: 48%;height: 300px; border-radius: 10px; border: solid 1px dodgerblue;">
				<h2>FOUNDER AND CHAIRMEN </h2>
				<?php include('./slide-show/founder.php'); ?>
			</div>
		</div>

			<!--Aciement Section-->

		<div class="row">
			<div class="column" style="margin-top: 10px; width: 48%;height: 300px; border-radius: 10px; border: solid 1px dodgerblue;">
				<h2>About us</h2>
				<label><p >Al-Ameen Institute of Information Sciences (AIIS) is the youngest institution to be run by the Al-Ameen Educational Society and has multi-lab and corporate training course with regular courses.</p>
				<p> The institute offers the two main courses of study. Bachelor of Computer Application (BCA), Master of Computer Application (MCA) approved by AICTE, New Delhi, Affiliated to Bangalore University and Recognized by Govt. Karnataka. </p></label>
			</div>
		</div>
	</div>
</div>
<!--News & Updates Section-->

<div class="row">
	<div class="column" style=" margin-top: -1px; width: 20%;height: 380px; border-radius: 10px; border: solid 1px dodgerblue;">
		<h2>News and updates</h2>

		<div class="row">
			<div class="column"  style="margin: 5px; margin-top:10px; width: 97%; height: 350px;border-radius: 8px;">
				<marquee class="marquee" behaviour="move" movedelay="100">Lates Updates and News</marquee>
					<?php
					$host="localhost";
					$user="root";
					$Password="";
					$db="College_portal";

					$conn = mysqli_connect($host,$user, $Password,$db);
 					$query1 = "select * from web_news Where Type='Important'";
  					$result1 = mysqli_query($conn,$query1);
   					$data1 =  mysqli_fetch_array($result1);
   					$query2 = "select * from web_news Where Type='Latest'";
  					$result2 = mysqli_query($conn,$query2);
   					$data2 =  mysqli_fetch_array($result2);
   					$query3 = "select * from web_news Where Type='Normal'";
  					$result3 = mysqli_query($conn,$query3);
   					$data3 =  mysqli_fetch_array($result3);
					?>
				<label >
					<p style="color: red;font-size:20px; font-family: sans-serif;">
					<marquee  behavior="scroll" direction="up" scrolldelay="200">
					<?php echo $data1['Description']?></p><br>
					<p style="color: darkgreen;font-size:20px; font-family: sans-serif;"><?php echo $data2['Description']?></p><br>
					<p style="color: darkorange;font-size:20px; font-family: sans-serif;"><?php echo $data3['Description']?></p><br>
</marquee>
				</label>
			</div>
		</div>
	</div>
</div>
<!--Lower Animated Image Section -->

    <div class="row">
	    <div class="column" style="width:41%; height: 400px;border-radius: 8px; position: relative; margin-top: -50PX;"> 
	    	<h2>INFRASTRUCTURE</h2>
	    	<?php include('./slide-show/infrastructure.php'); ?>
	    	 
</div>
</div>
    <div class="row">
	    <div class="column" style="width:55%; height: 400px;border-radius: 8px; position: relative; margin-top: -50PX;"> 
	    	<h2>SPORTS ACTIVITIES</h2>
	    	<?php include('./slide-show/sports.php'); ?>
 
</div>
</div>
<div class="row">
	    <div class="column" style="width:98%; height: 400px;border-radius: 8px; position: relative; margin-top: -15PX;"> 
	    	<h2>ABOUT US</h2>
	    	 <label><p><marquee  behavior="scroll" direction="up" scrolldelay="400">Al-Ameen Institute of Information Sciences (AIIS) is the youngest institution to be run by the Al-Ameen Educational Society and has multi-lab and corporate training course with regular courses. The institute offers the two main courses of study. Bachelor of Computer Application (BCA), Master of Computer Application (MCA) approved by AICTE, New Delhi, Affiliated to Bangalore University and Recognized by Govt. Karnataka
					<p>From modest beginnings the institute has now carved out a niche in the field of quality education. The unwavering commitment of the management to provide quality, value based education, professionally qualified and dedicated faculty and the state of art facilities have made Al-Ameen Institute of Information Sciences as one of the most sought after institutions for admissions by top ranking students from all parts of the country and abroad. Al Ameen institute provides an ambience that is most conducive to learning and personal growth. The versatility of academic programmes is unique to AIIS. A significant number of scholarships is offered to outstanding students on merit - cum - poverty basis. Many innovative teaching methods have been put in place, which includes online access to course material, access to digital libraries and international journals and so on.</marquee></p>
</div>
</div>
<div class="foter">
	<footer>
		<h1> © Al Ameen Educational Society 2018  Designed & Developed by Md Rizwan MCA 5th Semster 16HUSAC007</h1>
	</footer>
		
	</div>
</div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<meta  name="viewport" content="width=100%, initial-scale=1.0">
<head>
	<title>Web-Home-Page</title>
	<style>
	.wallpapsaer{	width: 100%; height: 7000px;	margin: 0 auto;	background: #F0FFFF;}

	.shell-1{ width: 1513px; height: 1435px; margin: 0 auto; border: solid 1px; border-radius: 2px; text-shadow: rgba(0,0,0,0.2) 0px 0px 2px; box-shadow: 0px 0px 2px rgba(0,0,0,0.2) inset; -webkit-box-shadow: 0px 0px 7px rgba(0,0,0,0.2) inset;  }

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
			border-radius: 10px;
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
	</style>
</head>


<body>
<div class="wallpaper">
<div class="shell-1">

<div class="web-header">
	<h3> Welcome to Al-Ameen Institite of Information Sciences</h3> 
</div>

<!--Slide Show Section-->
<div class="row">
	<div class="column" style="width:75%; height: 400px; border-radius: 8px; position: relative; border:dashed 2px violet;"> 
		<!--h2>Slide Show of College Interior Images</h2-->
				
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
	<div class="column" style=" margin-top: 0px; width: 75%;height: 420px; border-radius: 10px; border: dashed 2px violet;">
			<h2> Information</h2>
			<marquee class="marquee">  Welcome to Al-Ameen Institite of Information Sciences.. Hosure Road Bangalore 560-027</marquee>

			<!--College Department Section-->

		<div class="row">
			<div class="column" style="margin-top: 10px; width: 48%;height: 300px; border-radius: 10px; border: solid 1px dodgerblue;">
				<h2>Departments </h2>
			</div>
		</div>

			<!--Aciement Section-->

		<div class="row">
			<div class="column" style="margin-top: 10px; width: 48%;height: 300px; border-radius: 10px; border: solid 1px dodgerblue;">
				<h2>Achievments </h2>
			</div>
		</div>
	</div>
</div>
<!--News & Updates Section-->

<div class="row">
	<div class="column" style=" margin-top: -1px; width: 20%;height: 420px; border-radius: 10px; border: solid 1px dodgerblue;">
		<h2>News and updates</h2>

		<div class="row">
			<div class="column"  style="margin: 5px; margin-top:-10px; width: 97%; height: 350px;border-radius: 8px;border: dashed 1px green;">
				<marquee class="marquee">  Welcome to Al-Ameen Institite of Information Sciences.. Hosure Road Bangalore 560-027</marquee>

			</div>
		</div>
	</div>
</div>
<!--Lower Animated Image Section -->

    <div class="row">
	    <div class="column" style="width:99%; height: 400px;border-radius: 8px; position: relative;border: dashed 1px violet;"> 
	    	<!--h2>Animated Images Slide Show appers</h2-->
	  		<?php include('./slide-show/slide-show2.php'); ?>
		</div>
	</div>

<div class="foter">
	<footer>
		<h2> copyright@2018  made by Md Rizwan</h2>
	</footer>
		
	</div>
</div>
</div>

</body>
</html>
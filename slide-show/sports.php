<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<title>Automatic slide show </title>
<style>
.content{
width:50%; float: left; border-radius: 17px;
display: block;
}
.mySlides2 {display:none;}
.content img{border-radius: 5px; margin-left: 15px;  width: 820px; height: 330px;}
</style>
</head>

<body>
<div class="content">
  <img class="mySlides2" src="./images/sports/Sports1.jpg" >
  <img class="mySlides2" src="./images/sports/Sports2.jpg" >
  <img class="mySlides2" src="./images/sports/Sports3.jpg" >
  <img class="mySlides2" src="./images/sports/Sports4.jpg" >
  <img class="mySlides2" src="./images/sports/Sports5.jpg" >
  <img class="mySlides2" src="./images/sports/Sports6.jpg" >
  <img class="mySlides2" src="./images/sports/Sports7.jpg" >
  <img class="mySlides2" src="./images/sports/Sports10.jpg" >
  <img class="mySlides2" src="./images/sports/Sports11.jpg" >
  <img class="mySlides2" src="./images/sports/Sports12.jpg" >
  <img class="mySlides2" src="./images/sports/Sports13.jpg" >
  <img class="mySlides2" src="./images/sports/Sports14.jpg" >
  <img class="mySlides2" src="./images/sports/Sports15.jpg" >
  <img class="mySlides2" src="./images/sports/Sports16.jpg" >
  <img class="mySlides2" src="./images/sports/Sports17.jpg" >
  <img class="mySlides2" src="./images/sports/Sports19.jpg" >
</div>


<script>
var myIndex1 = 0;

sports();
function sports() {
    var i;
    var x = document.getElementsByClassName("mySlides2");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex1++;
    if (myIndex1 > x.length) {myIndex1 = 1}    
    x[myIndex1-1].style.display = "block";  
    setTimeout(sports, 3500); // Change image every 2 seconds
}

</script>

</body>
</html>

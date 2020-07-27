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
.mySlides1 {display:none;}

.content img{border-radius: 5px;}
</style>
</head>

<body>

<div class="content">
   <img class="mySlides1" src="./images/clg1.jpg" style="width:100%; height: 390px;">
  <img class="mySlides1" src="./images/clg2.jpg" style="width:100%; height: 390px;">
  <img class="mySlides1" src="./images/clg3.jpg" style="width:100%; height: 390px;">
  <img class="mySlides1" src="./images/clg4.jpg" style="width:100%; height: 390px;">
</div>


<script>
var myIndex = 0;
var myIndex1 = 0;

carousel();
carouse2();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides1");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 1500); // Change image every 2 seconds
}

</script>

</body>
</html>

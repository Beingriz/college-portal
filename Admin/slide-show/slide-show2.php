<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<title>automatic slide show </title>
<style>
.content{width:80%;display: block;
}
.mySlides1 {display:none;}
</style>
</head>

<body>

<div class="content">
   <img class="mySlides1" src="./images/1.jpg" style="width:100%; height: 390px;">
  <img class="mySlides1" src="./images/2.jpg" style="width:100%; height: 390px;">
  <img class="mySlides1" src="./images/3.jpg" style="width:100%; height: 390px;">
  <img class="mySlides1" src="./images/aiis1.jpg" style="width:80%; height: 390px;">
  <img class="mySlides1" src="./images/aiis2.jpg" style="width:80%; height: 390px;">
  <img class="mySlides1" src="./images/aiis3.jpg" style="width:80%; height: 390px;">
  <img class="mySlides1" src="./images/aiis1.jpg" style="width:80%; height: 390px;">
  <img class="mySlides1" src="./images/aiis2.jpg" style="width:80%; height: 390px;">
  <img class="mySlides1" src="./images/aiis3.jpg" style="width:80%; height: 390px;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides1");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 1000); // Change image every 2 seconds
}
</script>

</body>
</html>

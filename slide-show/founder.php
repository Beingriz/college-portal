<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<title>Automatic slide show </title>
<style>
.content{
width:400px; float: left; border-radius: 5px;display: block; height: 230px;
}
.mySlides3 {display:none;}
.mySlides4 {display:none;}

</style>
</head>

<body>

<div class="content">
   <img class="mySlides3" src="./images/AIIS_F1.jpg" style="width: 520px; height: 233px;  border-radius: 5px; margin-left: 13px;">
  <img class="mySlides3" src="./images/AIIS_F2.jpg"  style="width: 520px; height: 233px; border-radius: 5px;margin-left: 13px;">
  <img class="mySlides3" src="./images/AIIS_F3.jpg"  style="width: 520px; height: 233px; border-radius: 5px;margin-left: 13px;">
  <img class="mySlides3" src="./images/AIIS_F4.jpg"  style="width: 520px; height: 233px; border-radius: 5px;margin-left: 13px;">
</div>



<script>
var myIndex2 = 0;

carouse3();
function carouse3() {
    var i;
    var x = document.getElementsByClassName("mySlides3");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex2++;
    if (myIndex2 > x.length) {myIndex2 = 1}    
    x[myIndex2-1].style.display = "block";  
    setTimeout(carouse3, 2500); // Change image every 2 seconds
}

</script>
</body>
</html>

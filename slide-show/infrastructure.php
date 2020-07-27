<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<title>Automatic slide show </title>
<style>
.content1{
width:50%; float: left; border-radius: 17px;
display: block;
}
.mySlides1 {display:none;}

.content1 img{border-radius: 5px; margin-left: -10px; margin-right:  50px; width: 650px; height: 330px;}
</style>
</head>

<body>

<div class="content1">
   <img class="mySlides1" src="./images/infrastructure/clg1.jpg" >
   <img class="mySlides1" src="./images/infrastructure/clg2.jpg" >
   <img class="mySlides1" src="./images/infrastructure/clg3.jpg" >
   <img class="mySlides1" src="./images/infrastructure/clg4.jpg" >
   <img class="mySlides1" src="./images/infrastructure/clg5.jpg" >
   <img class="mySlides1" src="./images/infrastructure/clg6.jpg" >
   <img class="mySlides1" src="./images/infrastructure/clg7.jpg" >
   <img class="mySlides1" src="./images/infrastructure/clg8.jpg" >
   <img class="mySlides1" src="./images/infrastructure/clg9.jpg" >
   <img class="mySlides1" src="./images/infrastructure/clg10.jpg">
   <img class="mySlides1" src="./images/infrastructure/clg11.jpg">
   <img class="mySlides1" src="./images/infrastructure/clg12.jpg">
   <img class="mySlides1" src="./images/infrastructure/clg14.jpg">

</div>


<script>
var myIndex = 0;
carouseinfa();
function carouseinfa() {
    var i;
    var x = document.getElementsByClassName("mySlides1");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carouseinfa, 3000); // Change image every 2 seconds
}

</script>

</body>
</html>

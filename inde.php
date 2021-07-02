<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
	
  background-image: url('bbm5.jpg');
  height: 100%; 

  /* Center and scale the image nicely */
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
p{
	font-weight: 900;
	color: red;
}
a{
display: block;
   margin-left: 47.5%;
   margin-right: 50%;
   
}
</style>
</head>
<body>







<?php

$url = "https://thingspeak.com/channels/1408511/fields/3/last.json?api_key=0IQJRAN4L6IQO10B";

//call api
$json = file_get_contents($url);
$json = json_decode($json);
$lat = $json->field3;
if ($lat ==0) {
	echo "</br>";
	echo "</br>";
	echo "</br>";
   echo '<p style="color: blue;font-size:30px; text-align: center">Please touch the sensor to find the BPM value</p>';
}
if ($lat >=66 && $lat<75) {
	echo "</br>";
	echo "</br>";
	
   echo '<p  style="color: green;font-size:30px; text-align: center">Good Health <p  style="color: red;font-size:40px; text-align: center">❤</p></p>';
   
   echo '<p  style="color: blue;font-size:30px; text-align: center" >Please listen to this song to feel good</p>';
   
   echo '<a href="https://www.youtube.com/watch?v=Ax0G_P2dSBw"><img src="ccc.png"  /></a>';
  
}
if ($lat >=75 && $lat<80) {
	echo "</br>";
	echo "</br>";
	echo "</br>";
   echo '<p  style="color: forestgreen;font-size:30px; text-align: center">Above Average Health</p>';
   echo "</br>";  
   echo '<p  style="color: blue;font-size:30px; text-align: center">Please listen to this song to feel good</p>';
  

}
if ($lat >=80 && $lat<90) {
echo "</br>";
	echo "</br>";
	echo "</br>";
   echo '<p  style="color: crimson;font-size:30px; text-align: center">Average Health</p>';
   echo "</br>";  
   echo '<p  style="color: blue;font-size:30px; text-align: center">Please listen to this song to feel good</p>';
  
}
if ($lat >=90 && $lat<96) {
	echo "</br>";
	echo "</br>";
	echo "</br>";
   echo '<p  style="color: red;font-size:30px; text-align: center">Poor Health</p>';
   echo "</br>";  
   echo '<p  style="color: blue;font-size:30px; text-align: center">Please listen to this song to feel good</p>';
  
}


header("refresh: 20");
?> 
</body>
</html>
<?php

ini_set('display_errors', '1');
echo"<h3 align='center'>Rest-API: PHP Client Demo</h3>";
echo"<hr>";

$url = "http://helloworld.co.in/demo/rest-api/data.php"; 
//$url = "http://192.168.1.3/demo/rest-api/data.php"; 

$data=file_get_contents($url);

echo"JSON data received:-<br><b style='color:brown'>$data</b><br>";
echo"<hr>";

$obj = json_decode($data, true); 

$temperature=$obj['1']['temp'];
$humidity=$obj['1']['hum'];
$pressure=$obj['1']['pres'];

echo"Information Extracted:-<br><br>";      
echo"Temperature: <b>$temperature</b><br>
	 Humidity: <b>$humidity</b><br>
	 Pressure: <b>$pressure</b><br>";

echo"<hr>";

?>


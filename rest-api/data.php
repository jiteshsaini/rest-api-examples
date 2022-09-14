<?php

$arr['1']['temp'] = random_int(0, 100); //a random value
$arr['1']['hum'] = random_int(101, 200); //a random value
$arr['1']['pres'] = random_int(201, 300); //a random value

$arr['2']['aa'] = random_int(301, 400); //a random value
$arr['2']['bb'] = random_int(401, 500); //a random value
$arr['2']['cc'] = random_int(501, 600); //a random value

$json=json_encode($arr); //convert the array in json format 
echo"$json"; //send the json response

/* Save the response and client data to a file on disk*/
$t=time();
$date_time= date('H:i:s', $t);

$ip=$_SERVER["REMOTE_ADDR"]; //IP address of client requesting the data

$str=" Server Time: $date_time \n\n Client IP: $ip \n\n Data sent: $json";
file_put_contents("response.txt", $str); //save the data in a text file

?>
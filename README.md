# Using Rest APIs with Raspberry Pi, ESP32 and Web Applcations (PHP & Javascript)

The repo contains sample codes to demonstrate how to make use of Rest-APIs with different client devices running code in different languages. 
The sample codes include snippets in Python (for Raspberry Pi), C (for ESP32), PHP and Javascript. 
Each snippet makes HTTP request to a sample Rest-API (created for this project) and  processes the JSON response returned by the Rest-API.

<p align="center">
<img src='https://github.com/jiteshsaini/files/blob/main/img/rest-api-raspberrypi-esp32.jpg'>
</p>

## The Sample Rest-API
Folder 'rest-api' contains the code for sample Rest-API. You can place it in a Webserver running in your local LAN or any Webserver on Internet. 
<br><br>
Depending upon where you place the sample Rest-API, you need to provide its URL in the client sample codes. For example, I placed it in a webserver 
running on my laptop with IP 192.168.1.3, so all the following examples make request on the URL "192.168.1.3/demo/rest-api" to access the API.
<br><br>
This API is also accessible from the link https://helloworld.co.in/demo/rest-api/data.php <br>
So, if you do not have a local webserver, you can access this API from above link using your Raspberry Pi, ESP32 or Web App. 

## Access Rest-API with Raspberry Pi
Folder 'client-rpi' contains the python code. You can run this code from any Linux machine with Python installed. 
On Raspberry Pi, just place it in any location such as 'Desktop' and run it with python3 command. 
The picture below shows the HTTP request by Raspberry Pi and JSON response by the Rest-API.

<p align="center">
<img src='https://github.com/jiteshsaini/files/blob/main/img/raspberrypi-rest-api.jpg'>
</p>

## Access Rest-API with ESP 32

Folder 'client-asp' contains the C code for ESP32 microcontroller. You can upload this code to your ESP32 using Arduino IDE. 
You will require a library to process JSON data. I have used ArduinoJson library by Benolt Blanchon. The library can be downloaded from <a href='https://helloworld.co.in/downloads/ArduinoJson.zip'>here</a>. 
Update the Wifi credentials in the code as per your network. Power up ESP32 via USB port of a PC with Arduino IDE installed. 
Monitor the activity on Serial Monitor tool. You should see the following output.

<p align="center">
<img src='https://github.com/jiteshsaini/files/blob/main/img/esp32-rest-api.jpg'>
</p>

## Access Rest-API with PHP

Folder 'client-php' contains the PHP code. You can place this code in your local webserver and access it via browser. 

<p align="center">
<img src='https://github.com/jiteshsaini/files/blob/main/img/PHP-rest-api.jpg'>
</p>

You can also access this file from this link https://helloworld.co.in/demo/client-php

## Access Rest-API with Javascript

Folder 'client-js' contains a HTML file with Javascript code embedded in it.  

<p align="center">
<img src='https://github.com/jiteshsaini/files/blob/main/img/javascript-rest-api.jpg'>
</p>

You can also access this file from this link https://helloworld.co.in/demo/client-php


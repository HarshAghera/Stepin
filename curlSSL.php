<?php
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://www.stepin-solutions.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// grab URL and pass it to the browser
$response=curl_exec($ch); 
var_dump($response);
// close cURL resource, and free up system resources
curl_close($ch);
?>



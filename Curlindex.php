
<?php
//header('LOCATION: CurlgetData.php');
$url = 'http://localhost/project/datapage.php';
$data= array("name"=>"Harsh","city"=>"Ahemdabad");
//$encoddata=urlencode($data); 
$ch = curl_init(); 
 curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result=curl_exec($ch);
var_dump($result);

curl_close($ch);



?>
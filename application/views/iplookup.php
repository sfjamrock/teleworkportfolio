<?php

echo $ipaddress = $_SERVER['REMOTE_ADDR'];
$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
$json = file_get_contents("http://freegeoip.net/json/$ipaddress");
echo $json;
$data = json_decode($json);
echo $data->ip;
echo $data->city;
?>
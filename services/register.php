<?php
require_once('../utils/GeoIp.php');

$ip = GeoIp::getIp();
$country = GeoIp::getCountryName();
print_r($ip);
print_r($country);
<?php
require_once('../utils/GeoIp.php');
require_once('../utils/SecurityHelper.php');
require_once('../config.php');

$ip = GeoIp::getIp();
$country = GeoIp::getCountryName();
SecurityHelper::init($ip, PRODUCTION);
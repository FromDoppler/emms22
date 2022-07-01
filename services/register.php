<?php
require_once('../utils/GeoIp.php');
require_once('../utils/SecurityHelper.php');
require_once('../utils/Doppler.php');
require_once('../config.php');

$ip = GeoIp::getIp();
$country = GeoIp::getCountryName();
SecurityHelper::init($ip, SECURITYHELPER_ENABLE);
Doppler::init($ACCOUNT_DOPPLER, $API_KEY_DOPPLER);
try {
    SecurityHelper::isSubmitValid($ALLOW_IPS);
    Doppler::subscriber($data, $list);
   
}
catch (Exception $e) {
    echo '<br>Excepción capturada: ',  $e->getMessage(), "\n";
} 
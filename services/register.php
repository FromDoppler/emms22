<?php
require_once('../utils/GeoIp.php');
require_once('../utils/SecurityHelper.php');
require_once('../utils/Doppler.php');
require_once('../config.php');

$ip = GeoIp::getIp();
$countryGeo = GeoIp::getCountryName();
$user = array(
    'firstname' => 'Bruce',
    'lastname' => 'Wayne',
    'email' => 'hcardoso+1@fromdoppler.com',
    'policy' => true,
    'promotions' => false,
    'phone' => '+542494619633',
    'country' => 'Argentina',
    'ip' => $ip,
    'country_ip' => $countryGeo,
    'source_utm' => 'source_utm',
    'medium_utm' => 'utmmedium',
    'campaign_utm' => 'utmcampaign',
    'content_utm' => 'utmcontent',
    'term_utm' => 'utmterm'
);
SecurityHelper::init($ip, SECURITYHELPER_ENABLE);
Doppler::init($ACCOUNT_DOPPLER, $API_KEY_DOPPLER);
try {

    SecurityHelper::isSubmitValid($ALLOW_IPS);
    Doppler::subscriber($user, "11111");
   
}
catch (Exception $e) {
    echo '<br>Excepción capturada: ',  $e->getMessage(), "\n";
} 
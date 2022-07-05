<?php
require_once('../utils/GeoIp.php');
require_once('../utils/SecurityHelper.php');
require_once('../utils/Doppler.php');
require_once('../utils/Validator.php');
require_once('../utils/ErrorLog.php');
require_once('../utils/DB.php');
require_once('../utils/SpreadSheetGoogle.php');
require_once('../utils/Relay.php');
require_once('../config.php');
$_POST = json_decode(file_get_contents('php://input'), true);

$ip = GeoIp::getIp();
$countryGeo = GeoIp::getCountryName();

$email = isset($_POST['email']) ? $_POST['email'] : null;
$firstname = isset($_POST['name']) ? $_POST['name'] : null;
$lastname = isset($_POST['lastname']) ? $_POST['lastname']	: 'Parker';
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$privacy 	= isset($_POST['acceptPolicies']) ? $_POST['acceptPolicies'] 	: false;
$promotions = isset($_POST['acceptPromotions']) ? $_POST['acceptPromotions'] : false;
$country 	= isset($_POST['country']) ? $_POST['country'] : null;
$industry 	= isset($_POST['industry']) ? $_POST['industry'] : null;
$company 	= isset($_POST['company']) ? $_POST['company'] : null;
$source_utm = isset($_POST['source_utm']) ? $_POST['source_utm'] : null;
$medium_utm = isset($_POST['medium_utm']) ? $_POST['medium_utm'] : null;
$campaign_utm = isset($_POST['campaign_utm']) ? $_POST['campaign_utm']	: null;
$content_utm = isset($_POST['content_utm']) ? $_POST['content_utm'] : null;
$term_utm = isset($_POST['term_utm']) ? $_POST['term_utm'] : null;

try {
    SecurityHelper::init($ip, SECURITYHELPER_ENABLE);
    SecurityHelper::isSubmitValid($ALLOW_IPS);
}    
catch (Exception $e) {
    ErrorLog::log($e->getMessage());
    exit('submits');
}
try {
    $user = array(
        'firstname' => Validator::validateRequired('firstname', $firstname),
        'lastname' => Validator::validateRequired('lastname', $lastname),
        'email' => Validator::validateEmail($email),
        'privacy' => Validator::validateBool('privacy', $privacy),
        'promotions' => Validator::validateBool('promotions', $promotions),
        'phone' => Validator::validateRequired('phone', $phone),
        'country' =>  Validator::validateRequired('country', $country),
        'industry' =>  Validator::validateRequired('industry', $industry),
        'company' =>  Validator::validateRequired('company', $company),
        'ip' => $ip,
        'country_ip' => $countryGeo,
        'source_utm' => $source_utm,
        'medium_utm' => $medium_utm,
        'campaign_utm' => $campaign_utm,
        'content_utm' => $content_utm,
        'term_utm' => $term_utm,
        'form_id' => 'landing',
        'list' => LIST_LANDING,
    );
}    
 catch (Exception $e) {
    ErrorLog::log($e->getMessage());
}

try {
    Doppler::init($ACCOUNT_DOPPLER, $API_KEY_DOPPLER);
    Doppler::subscriber($user);
}    
catch (Exception $e) {
    ErrorLog::log($e->getMessage());
}

try {    
    $db = new DB($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    $db->insertSubscriptionDoppler($user);
   
}
catch (Exception $e) {
    ErrorLog::log($e->getMessage());
}
try {    
    SpreadSheetGoogle::write($ID_SPREADSHEET, $user);
}
catch (Exception $e) {
    ErrorLog::log($e->getMessage());
}

try {    
    Relay::init($ACCOUNT_RELAY, $API_KEY_RELAY);
    Relay::sendEmailRegister($user['email'], 'Registrado con exito!', 'landing');
   
}
catch (Exception $e) {
    ErrorLog::log($e->getMessage());
}  
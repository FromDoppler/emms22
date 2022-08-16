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

date_default_timezone_set('America/Argentina/Buenos_Aires');

function isSubmitValid($ip) {
    try {
        SecurityHelper::init($ip, SECURITYHELPER_ENABLE);
        SecurityHelper::isSubmitValid(ALLOW_IPS);
    }    
    catch (Exception $e) {
        ErrorLog::log("isSubmitValid ".$e->getMessage());
        exit('submits');
    }
}

function setDataRequest($ip, $countryGeo) {
    $_POST = json_decode(file_get_contents('php://input'), true);
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $firstname = isset($_POST['name']) ? $_POST['name'] : null;
    $lastname = isset($_POST['lastname']) ? $_POST['lastname']	: 'Parker';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $privacy 	= isset($_POST['acceptPolicies']) ? $_POST['acceptPolicies'] 	: false;
    $promotions = isset($_POST['acceptPromotions']) ? $_POST['acceptPromotions'] : false;
    $country 	= isset($_POST['country']) ? $_POST['country'] : null;
    $industry 	= isset($_POST['industry']) ? $_POST['industry'] : null;
    $company 	= isset($_POST['company']) ? $_POST['company'] : null;
    $source_utm = isset($_POST['utm_source']) ? $_POST['utm_source'] : null;
    $medium_utm = isset($_POST['utm_medium']) ? $_POST['utm_medium'] : null;
    $campaign_utm = isset($_POST['utm_campaign']) ? $_POST['utm_campaign']	: null;
    $content_utm = isset($_POST['utm_content']) ? $_POST['utm_content'] : null;
    $term_utm = isset($_POST['utm_term']) ? $_POST['utm_term'] : null;
    $origin = isset($_POST['origin']) ? $_POST['origin'] : null;
    try {

        $user = array(
            'register' => date("Y-m-d h:i:s A"),
            'firstname' => Validator::validateRequired('firstname', $firstname),
            'lastname' => $lastname,
            'email' => Validator::validateEmail($email),
            'privacy' => Validator::validateBool('privacy', $privacy),
            'promotions' => Validator::validateBool('promotions', $promotions),
            'phone' => $phone,
            'country' =>  $country,
            'industry' =>  Validator::validateRequired('industry', $industry),
            'company' =>  $company,
            'ip' => $ip,
            'country_ip' => $countryGeo,
            'source_utm' => $source_utm,
            'medium_utm' => $medium_utm,
            'campaign_utm' => $campaign_utm,
            'content_utm' => $content_utm,
            'term_utm' => $term_utm,
            'origin' => $origin,
            'form_id' => 'landing',
            'list' => LIST_LANDING,
        );
        return $user;    
    }    
    catch (Exception $e) {
        ErrorLog::log("setDataRequest ".$e->getMessage());
    }

}

function saveSubscriptionDoppler($user) {
   try {
        Doppler::init(ACCOUNT_DOPPLER, API_KEY_DOPPLER);
        Doppler::subscriber($user);
    }    
    catch (Exception $e) {
        ErrorLog::log("Doppler saveSubscriptionDoppler ".$e->getMessage());
    }
}
function saveSubscriptionDopplerTable($user) {

    try {    
        $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $db->insertSubscriptionDoppler($user);
        $db->saveRegistered($user);
        $db->close();
    }
    catch (Exception $e) {
        ErrorLog::log("DB saveSubscriptionDopplerTable ".$e->getMessage());
    }
}

function saveSubscriptionSpreadSheet($user) {
    try {    
        $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        SpreadSheetGoogle::write(ID_SPREADSHEET, $user, $db);
        $db->close();
    }
    catch (Exception $e) {
        ErrorLog::log("Spread saveSubscriptionSpreadSheet ".$e->getMessage());
    }
}

function sendEmail($user, $subject) {
    try {    
    Relay::init(ACCOUNT_RELAY, API_KEY_RELAY);
    Relay::sendEmailRegister($user, $subject);
    }
    catch (Exception $e) {
        ErrorLog::log($e->getMessage());
        ErrorLog::log("Relay sendEmail ".$e->getMessage());
    }  
}


//MAIN
$ip = GeoIp::getIp();
$countryGeo = GeoIp::getCountryName();
isSubmitValid($ip);
$user = setDataRequest($ip, $countryGeo);
saveSubscriptionDoppler($user);
saveSubscriptionDopplerTable($user);
saveSubscriptionSpreadSheet($user);
sendEmail($user, 'Agrega #EMMS2022 a tu calendario');

 
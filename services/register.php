<?php
require_once('../utils/GeoIp.php');
require_once('../utils/SecurityHelper.php');
require_once('../utils/Doppler.php');
require_once('../utils/Validator.php');
require_once('../utils/ErrorLog.php');
require_once('../utils/DB.php');
require_once('../utils/SpreadSheetGoogle.php');
require_once('../config.php');

$ip = GeoIp::getIp();
$countryGeo = GeoIp::getCountryName();
$email = isset($_POST['email']) ? $_POST['email'] : 'hcardoso6+20220701@makingsense.com';
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : 'Peter';
$lastname = isset($_POST['lastname']) ? $_POST['lastname']	: 'Parker';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '+542494619633';
$privacy 	= isset($_POST['privacy']) ? $_POST['privacy'] 	: true;
$promotions = isset($_POST['promotions']) ? $_POST['promotions'] : true;
$country 	= isset($_POST['country']) ? $_POST['country'] : 'Arg';
$source_utm = (isset($_POST['source_utm']) && (trim($_POST['source_utm']) !== "")) ? $_POST['source_utm'] : null;
$medium_utm = (isset($_POST['medium_utm']) && (trim($_POST['medium_utm']) !== "")) ? $_POST['medium_utm'] : null;
$campaign_utm = (isset($_POST['campaign_utm']) && (trim($_POST['campaign_utm']) !== "")) ? $_POST['campaign_utm']	: null;
$content_utm = (isset($_POST['content_utm']) && (trim($_POST['content_utm']) !== "")) ? $_POST['content_utm'] : null;
$term_utm = (isset($_POST['term_utm']) && (trim($_POST['term_utm']) !== "")) ? $_POST['term_utm'] : null;

SecurityHelper::init($ip, SECURITYHELPER_ENABLE);
Doppler::init($ACCOUNT_DOPPLER, $API_KEY_DOPPLER);
try {

    $user = array(
        'firstname' => Validator::validateRequired('firstname', $firstname),
        'lastname' => Validator::validateRequired('lastname', $lastname),
        'email' => Validator::validateEmail($email),
        'privacy' => Validator::validateBool('privacy', $privacy),
        'promotions' => Validator::validateBool('promotions', $promotions),
        'phone' => Validator::validateRequired('phone', $phone),
        'country' =>  Validator::validateRequired('country', $country),
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
    SecurityHelper::isSubmitValid($ALLOW_IPS);
    Doppler::subscriber($user);
    $db = new DB($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    $db->insertSubscriptionDoppler($user);
    SpreadSheetGoogle::write($ID_SPREADSHEET, $user, 'A1:N1');
   
}
catch (Exception $e) {
    ErrorLog::log($e->getMessage());
    print_r($e->getMessage());
} 
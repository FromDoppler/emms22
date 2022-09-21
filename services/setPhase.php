<?php

require_once('../utils/GeoIp.php');
require_once('../utils/SecurityHelper.php');
require_once('../utils/ErrorLog.php');
require_once('../utils/DB.php');
require_once('../config.php');

require_once('functions.php');




try {
    $_POST = json_decode(file_get_contents('php://input'), true);
    $ip = GeoIp::getIp();
    SecurityHelper::init($ip, SECURITYHELPER_ENABLE);
    SecurityHelper::isSubmitValid(ALLOW_IPS);
    $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $db->updateCurrentPhase($_POST['phase']);
} catch (Exception $e) {
    processError("setPhase", $e->getMessage(), ['POST' => $_POST]);
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    exit();
}

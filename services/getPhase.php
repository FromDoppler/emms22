<?php

require_once('../utils/GeoIp.php');
require_once('../utils/SecurityHelper.php');
require_once('../utils/ErrorLog.php');
require_once('../utils/DB.php');
require_once('../config.php');


try {
    $ip = GeoIp::getIp();
    SecurityHelper::init($ip, SECURITYHELPER_ENABLE);
    SecurityHelper::isSubmitValid(ALLOW_IPS);
    $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    echo json_encode($db->getCurrentPhase());
} catch (Exception $e) {
    ErrorLog::log("setPhase", $e->getMessage(), []);
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    exit();
}

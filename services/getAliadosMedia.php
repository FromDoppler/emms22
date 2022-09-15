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
    $allies = $db->getAliadosMedia("orden_home");
    echo json_encode($allies);
} catch (Exception $e) {
    ErrorLog::log("getAliadosMedia", $e->getMessage(), []);
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    exit();
}

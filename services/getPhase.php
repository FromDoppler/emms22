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
    $phases = $db->getCurrentPhase()[0];
    $current_phase = array_search(1, $phases);
    echo json_encode($current_phase);
} catch (Exception $e) {
    $obj_con = array('dbHost' => DB_HOST, 'dbName' => DB_NAME, 'dbPass' => DB_PASSWORD, 'dbUser' => DB_USER);
    ErrorLog::log($obj_con, "setPhase", $e->getMessage(), []);
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    exit();
}

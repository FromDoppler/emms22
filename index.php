<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/GeoIp.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/SecurityHelper.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/services/functions.php');


try {

    $ip = GeoIp::getIp();
    SecurityHelper::init($ip, SECURITYHELPER_ENABLE);
    SecurityHelper::isSubmitValid(ALLOW_IPS);
    $response = processPhaseToShow($ip);
    $simulated = $response['simulated'];
    $dayDuring  = $response['day'];
    $liveDayDuring  = $response['live'];
    require_once($_SERVER['DOCUMENT_ROOT'] . "/stages/$response[phaseToShow]/index.php");
} catch (Exception $e) {
    processError("Index main", $e->getMessage(), []);

}

?>

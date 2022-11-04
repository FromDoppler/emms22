<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
?>
<script src="../../common/html/<?= VERSION ?>/js/vendors/socket.io.min.js?version=<?= VERSION ?>"></script>
<script>
    const socket = io("wss://<?= URL_REFRESH ?>", {
        path: "/<?= PATH_REFRESH ?>/socket.io"
    });
    // receive a message from the server
    socket.on("state", (args) => {
        location.reload();
    });
</script>
<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/GeoIp.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/SecurityHelper.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/services/functions.php');

try {

    $ip = GeoIp::getIp();
    SecurityHelper::init($ip, SECURITYHELPER_ENABLE);
    SecurityHelper::isSubmitValid(ALLOW_IPS);
    $response = processPhaseToShow($ip);
    $simulated = $response['simulated'];
    $dayDuring  = $response['day'];
    $liveDayDuring  = $response['live'];
    $problemsTransmission = $response['problemsTransmission'];
    $isTransmissionYoutube = $response['isTransmissionYoutube'];
    require_once($_SERVER['DOCUMENT_ROOT'] . "/stages/$response[phaseToShow]/registrado.php");
} catch (Exception $e) {
    processError("Index main", $e->getMessage(), []);
}

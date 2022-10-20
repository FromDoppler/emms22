<script src="https://cdn.socket.io/4.5.3/socket.io.min.js" integrity="sha384-WPFUvHkB1aHA5TDSZi6xtDgkF0wXJcIIxXhC6h8OT8EH3fC5PWro5pWJ1THjcfEi" crossorigin="anonymous">
</script>
<script>
    const socket = io("ws://apisint.fromdoppler.net/emms-socket/");
    // receive a message from the server
    socket.on("state", (args) => {
        location.reload();
    });
</script>
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

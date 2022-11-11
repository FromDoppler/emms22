<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/DB.php');

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
/*require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/GeoIp.php');
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
}*/
$simulated = SIMULATED;
$dayDuring  = DURING_DAY;
$liveDayDuring  = DURING_STATE;
$problemsTransmission = ERROR_TRANSMISSION;
$isTransmissionYoutube = TRANSMISSION_YOUTUBE;
$response = array();
$response['phaseToShow'] = PHASE;
$mem_var = new Memcached();
$mem_var->addServer("127.0.0.1", 11211);
//SPEAKERS
$speakersDay1 = $mem_var->get("speakersDay1");
$speakersDay2 = $mem_var->get("speakersDay2");
$speakersDay3 = $mem_var->get("speakersDay3");
//ALIADOS


$aliadosPro = $mem_var->get("aliadosPro");

if (!$aliadosPro) {
    $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $aliadosPro = $db->getAliadosPro('orden_home');
    $mem_var->set("aliadosPro", $aliadosPro, CACHE_TIME_SPEAKERS);
    $db->close();
}

if (!$speakersDay1) {
    $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $speakersDay1 = $db->getSpeakersByDay(1);
    $mem_var->set("speakersDay1", $speakersDay1, CACHE_TIME_SPEAKERS);
    $db->close();
}

if (!$speakersDay2) {
    $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $speakersDay2 = $db->getSpeakersByDay(2);
    $mem_var->set("speakersDay2", $speakersDay2, CACHE_TIME_SPEAKERS);
    $db->close();
}
if (!$speakersDay3) {
    $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $speakersDay3 = $db->getSpeakersByDay(3);
    $mem_var->set("speakersDay3", $speakersDay3, CACHE_TIME_SPEAKERS);
    $db->close();
}

require_once($_SERVER['DOCUMENT_ROOT'] . "/stages/" . PHASE . "/registrado.php");
?>


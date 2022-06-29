<?php
require_once 'config.php';

try {
    $adapter->authenticate();
    $token = $adapter->getAccessToken();
    require($_SERVER['DOCUMENT_ROOT'] . "/demo-day/config.php");
    $db = new DBSpread($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    $db->update_access_token(json_encode($token));
    echo "Access token inserted successfully.";
} catch (Exception $e) {
    echo $e->getMessage();
}

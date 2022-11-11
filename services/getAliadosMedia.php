<?php


require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/DB.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');

require_once($_SERVER['DOCUMENT_ROOT'] . '/services/functions.php');


try {
    $mem_var = new Memcached();
    $mem_var->addServer("127.0.0.1", 11211);
    $aliadosMedia = $mem_var->get("aliadosMedia");

    if (!$aliadosMedia) {
        $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $aliadosMedia = $db->getAliadosMedia("orden_home");
        $mem_var->set("aliadosMedia", $aliadosMedia, CACHE_TIME_SPEAKERS);
        $db->close();
    }


    echo json_encode($aliadosMedia);
} catch (Exception $e) {
    processError("getAliadosMedia", $e->getMessage(), []);
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    exit();
}

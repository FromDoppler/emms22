<?php

$allowedOrigins = [
    'https://qa.goemms.com/',
    'https://goemms.com/',

];
if (in_array($_SERVER['HTTP_ORIGIN'], $allowedOrigins)) {
    $http_origin = $_SERVER['HTTP_ORIGIN'];
} else {
    $http_origin = "https://qa.goemms.com/";
}

header("Access-Control-Allow-Origin: $http_origin");

require_once('./twitterController.php');

$mem_var = new Memcached();
$mem_var->addServer("127.0.0.1", 11211);
$response = $mem_var->get("tweets");

$twitterController = new twitterController(HASHTAG);

$json = file_get_contents('php://input');
$data = json_decode($json);

if ($data->method === 'getAllTweets') {

    if ($response) {
        echo $response;
    } else {
        if ($mem_var->get("latestId")) {
            $tweetResponse = $twitterController->getAllTweetsByNewestedId($mem_var->get("latestId"));
        } else {
            $tweetResponse = $twitterController->getAllTweets();
        }

        $tweetObj = json_decode($tweetResponse);

        if ($tweetResponse && isset($tweetObj->meta->newest_id)) {
            $tweetAmount = $tweetObj->meta->result_count;
            $tweets->allTweets = $tweetObj->data;
            $latestId = $tweetObj->meta->newest_id;
            $tweets->latestId = $latestId;
        }

        if ($tweets->latestId && intval($tweetAmount) === 30) {
            //Respuesta de nuevos tweets
            $mem_var->set("tweets", $tweetResponse, CACHE_TIME);
            $mem_var->set("cacheDateTweets",  date("Y-m-d h:i:s A"), CACHE_TIME);
            $mem_var->set("tweetBackup", $tweetResponse, CACHE_BACKUP_TIME);
            //Guardamos el id del ultimo tweet del ultimo request
            $mem_var->set("latestId",  $tweets->latestId, CACHE_TIME_ID);
            $mem_var->set("cacheDateId",  date("Y-m-d h:i:s A"), CACHE_TIME_ID);

            echo $tweetResponse;
        } else {
            // Al no tener un nuevo request de tweets, mandamos el backup
            // para los nuevos usuarios que entran por primera vez
            echo $mem_var->get("tweetBackup");
        }
    }
}

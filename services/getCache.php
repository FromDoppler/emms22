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

        if ($tweetResponse) {
            $latestId = $tweetObj->meta->newest_id;
            $tweetAmount = $tweetObj->meta->result_count;
            $tweets->allTweets = $tweetObj->data;
            $tweets->latestId = $latestId;
        }

        if ($tweets->latestId && intval($tweetAmount) === 30) {
            //Respuesta de nuevos tweets
            $mem_var->set("tweets", $tweetResponse, 60);
            //Backup de la respuesta de nuevos tweets
            $mem_var->set("tweetBackup", $tweetResponse, 9999999);
            //Guardamos el id del ultimo tweet del ultimo request
            $mem_var->set("latestId", $tweets->latestId, 120);
            echo $tweetResponse;
        } else {
            // Al no tener un nuevo request de tweets, mandamos el backup
            // para los nuevos usuarios que entran por primera vez
            echo $mem_var->get("tweetBackup");
        }
    }
}

<?php
session_start();
require "vendor/autoload.php";
require 'twitteroauth/config.php';

use Abraham\TwitterOAuth\TwitterOAuth;

// $access_token = $_GET['oauth_token'];
// $access_token_secret = $_GET['oauth_verifier'];


// $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
// $content = $connection->get("account/verify_credentials");

// // $statues = $connection->post("statuses/update", ["status" => "hello world"]);

// print_r($content);

if (!isset($_SESSION['access_token'])) {
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
    $request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
    $_SESSION['oauth_token'] = $request_token['oauth_token'];
    $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
    $url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
    echo $url;
} else {
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $userText = $data->text;

    $access_token = $_SESSION['access_token'];
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

    // getting basic user info
    $user = $connection->get("account/verify_credentials");

    // printing username on screen
    // echo $user->screen_name;

    // posting tweet on user profile
    $post = $connection->post('statuses/update', array('status' => $userText));
    // displaying response of $post object
    $response = new stdClass;
    $response->id = $post->id;
    $response->text = $post->text;
    $response->createAt = $post->created_at;
    print_r(json_encode($response));
}

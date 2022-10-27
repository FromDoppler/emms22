<?php
require 'vendor/autoload.php';
require 'twitteroauth/config.php';


use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', getenv('CONSUMER_KEY'));
define('CONSUMER_SECRET', getenv('CONSUMER_SECRET'));
define('OAUTH_CALLBACK', getenv('OAUTH_CALLBACK'));

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
session_start();

$_SESSION['oauth_token'] = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
// $twitterOauth = array(
//     "oauth_token" => $request_token['oauth_token'],
//     "oauth_token_secret" => $request_token['oauth_token_secret'],
// );
// $_SESSION['access_token'] = $twitterOauth;




$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
$_SESSION['oauth_verifier'] = $_GET['oauth_verifier'];


// print_r($_SESSION['oauth_token']);
// print_r('----------------');

// print_r($_SESSION['oauth_token_token_secret']);
// print_r('----------------');


// print_r($_SESSION['access_token']);

// print_r($url);
// if (isset($_SESSION['oauth_token']) && isset($_SESSION['oauth_token_secret'])) {
//     print_r($_SESSION['oauth_token']);
//     print_r('...........');
//     print_r($_SESSION['oauth_token_secret']);

//     $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);

//     $access_token = $connection->get("oauth/authenticate");
//     print_r($access_token);
// } else {
//     print_r('no isset');
// }

// header('Location: '. $url);
// $verifier = $_GET['oauth_verifier'];
$twitterOauth = array(
    "oauth_token" => $_GET['oauth_token'],
    "oauth_verifier" => $_GET['oauth_verifier'],
);

$NAME = $_GET['oauth_verifier'];
print_r($NAME);
$access_token = $connection->oauth("oauth/access_token", ["oauth_verifier" => $NAME]);
print_r($access_token);

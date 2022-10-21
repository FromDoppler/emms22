<?php

$ALLOW_IPS = array('::1', '200.5.229.58', '200.5.253.210', '127.0.0.1', '172.23.0.1');
$ACCOUNT_DOPPLER = getenv("ACCOUNT_DOPPLER");
$API_KEY_DOPPLER = getenv("API_KEY_DOPPLER");
$ACCOUNT_RELAY = getenv("ACCOUNT_RELAY");
$API_KEY_RELAY = getenv("API_KEY_RELAY");
$GOOGLE_CLIENT_ID = getenv("GOOGLE_CLIENT_ID");
$GOOGLE_CLIENT_SECRET = getenv("GOOGLE_CLIENT_SECRET");
$ID_SPREADSHEET =  getenv("ID_SPREADSHEET");
$DB_NAME = getenv("MYSQL_DATABASE");
$DB_USER = getenv("MYSQL_USER");
$DB_PASSWORD = getenv("MYSQL_PASSWORD");
$DB_HOST = getenv("MYSQL_HOST");


if (!defined('VERSION')) define('VERSION', '1.0.0');
if (!defined('PRODUCTION')) define('PRODUCTION', false);
if (!defined('SECURITYHELPER_ENABLE')) define('SECURITYHELPER_ENABLE', false);

#IPS WHITE LIST
if (!defined('ALLOW_IPS')) define('ALLOW_IPS', $ALLOW_IPS);

#API DOPPLER

if (!defined('ACCOUNT_DOPPLER')) define('ACCOUNT_DOPPLER', $ACCOUNT_DOPPLER);
if (!defined('API_KEY_DOPPLER')) define('API_KEY_DOPPLER', $API_KEY_DOPPLER);
if (!defined('LIST_LANDING')) define('LIST_LANDING', 28547158);

#API RELAY

if (!defined('ACCOUNT_RELAY')) define('ACCOUNT_RELAY', $ACCOUNT_RELAY);
if (!defined('API_KEY_RELAY')) define('API_KEY_RELAY', $API_KEY_RELAY);

#GOOGLE SPREADSHEET
//https://docs.google.com/spreadsheets/d/1HpSLWrz5lLcUKFyVGGF7PQ2FJvsydTV0IMahZogbQt0/edit#gid=0

if (!defined('GOOGLE_CLIENT_ID')) define('GOOGLE_CLIENT_ID', $GOOGLE_CLIENT_ID);
if (!defined('GOOGLE_CLIENT_SECRET')) define('GOOGLE_CLIENT_SECRET', $GOOGLE_CLIENT_SECRET);
if (!defined('ID_SPREADSHEET')) define('ID_SPREADSHEET', $ID_SPREADSHEET);
if (!defined('GOOGLE_SPREAD_CALLBACK')) define('GOOGLE_SPREAD_CALLBACK', 'http://localhost/utils/spread/callback.php');

#DATABASE

if (!defined('DB_NAME')) define('DB_NAME', $DB_NAME);
if (!defined('DB_USER')) define('DB_USER', $DB_USER);
if (!defined('DB_PASSWORD')) define('DB_PASSWORD', $DB_PASSWORD);
if (!defined('DB_HOST')) define('DB_HOST', $DB_HOST);

#During Days System
$duringDaysArray = array(
    "d1" => array(
        "video" => "Fxn-toxKKIQ",
        "hashtag-chat" => "#EMMS22DIA1",
        "hashtag-gral" => "#EMMS2022",
        "banner-transition" => "placa-dia01-transition",
        "banner-nolive" => "placa-dia01-nolive"
    ),
    "d2" => array(
        "video" => "video2",
        "hashtag-chat" => "#EMMS22DIA2",
        "hashtag-gral" => "#GOEMMS",
        "banner-transition" => "placa-dia02-transition",
        "banner-nolive" => "placa-dia02-nolive"
    ),
    "d3" => array(
        "video" => "video3",
        "hashtag-chat" => "#EMMS22DIA3",
        "hashtag-gral" => "#EMMSBYDOPPLER",
        "banner-transition" => "placa-dia03-transition",
        "banner-nolive" => "placa-dia03-nolive"
    ),
);




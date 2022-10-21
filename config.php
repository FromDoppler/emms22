<?php

$ALLOW_IPS = array('::1', '200.5.229.58', '200.5.253.210', '127.0.0.1', '172.18.0.1');
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
$SECRET_REFRESH = getenv("SECRET_REFRESH");


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

#SERVER NODE SOCKET

if (!defined('URL_REFRESH')) define('URL_REFRESH', 'apisqa.fromdoppler.net');
if (!defined('PATH_REFRESH')) define('PATH_REFRESH', 'emms-socket');
if (!defined('SECRET_REFRESH')) define('SECRET_REFRESH', $SECRET_REFRESH);

#During Days System
$duringDaysArray = array(
    "d1" => array(
        "title" => "Charla dia 1",
        "video" => "Fxn-toxKKIQ",
        "hashtag" => "#EMMS22DIA1",
        "banner" => "placa-dia01"
    ),
    "d2" => array(
        "title" => "Charla dia 2",
        "video" => "video2",
        "hashtag" => "#EMMS22DIA2",
        "banner" => "placa-dia02"
    ),
    "d3" => array(
        "title" => "Charla dia 3",
        "video" => "video3",
        "hashtag" => "#EMMS22DIA3",
        "banner" => "placa-dia03"
    ),
);




<?php

class ErrorLog {
    private const debugger = 0;

    private $dbHost;
    private $dbName;
    private $dbPass;
    private $dbUser;


    private static function saveErrorDataBase($function, $error, $data)
    {
        $connection = new mysqli(self::$dbHost, self::$dbUser, self::$dbPass, self::$dbName);
        if ($connection->connect_error) {
            error_log('LOG ERRORS - Failed to connect to MySQL - ' . $connection->connect_error);
        }
        $connection->set_charset('utf8');
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $date = date("Y-m-d h:i:s A");
        $sql = "INSERT INTO log_errors(date, function_name, description, data) VALUES ('" . $date . "', '" . $function . "', '" . $error . "', '" . $data . "')";
        $connection->query($sql);
    }


    public static function log($obj_con, $from, $error, $data)
    {

        self::$dbHost = $obj_con['dbHost'];
        self::$dbName = $obj_con['dbName'];
        self::$dbPass = $obj_con['dbPass'];
        self::$dbUser = $obj_con['dbUser'];
        $text = "\n\tMetodo: " . $from . "\n\tDescripcion: " . $error . "\n\tData: " . json_encode($data) . "\n";
        error_log($text);
        self::saveErrorDataBase($from, addslashes($error), addslashes(json_encode($data)));
        if(self::debugger)
            print_r($text);
    }
}

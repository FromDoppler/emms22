<?php
class ErrorLog {

    public static function log($error) {
        error_log($error);
        print_r($error);

    }

}
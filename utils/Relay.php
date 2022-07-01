<?php
class Relay {
    private static $apiKey;
    private static $account;
 
    private const urlBase = 'https://restapi.fromdoppler.com/accounts/';

    private static function executeCurl($url, $data, $headers, $method) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        return curl_exec($ch);
    }

    public static function init($account, $apiKey) {
	    self::$apiKey = $apiKey;
		self::$account = $account;
	}



}
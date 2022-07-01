<?php
class Relay {
    private static $apiKey;
    private static $account;
 
    private const urlBase = 'https://api.dopplerrelay.com/accounts/';
    private const fromName = 'EMMS 2022';
    private const fromEmail = 'info@goemms.com';

    private static function templateEmailLanding() {
        return "<h1>template emms 2022</h1>";
    }

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

    public static function sendEmailRegister($emailTo, $subject, $phase) {
        
        $html = ($phase === 'landing') ? self::templateEmailLanding() : '';
        $data = array(
            'from_name' => self::fromName,
            'from_email' => self::fromEmail,
            'reply_to' => array("email" => self::fromEmail),
            'recipients' => array(array('type' => 'to', 'email' => $emailTo)),
            'subject' => $subject,
            'html' => $html
        );
        $dataJson = json_encode($data);
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: token ' . self::$apiKey;
        $headers[] = 'Content: ' . strlen($dataJson);
        $endPointSendEmail = self::urlBase . self::$account . "/messages";
        $response = json_decode(self::executeCurl($endPointSendEmail, $dataJson, $headers, 'POST'));
        if(isset($response->errorCode)) :
            throw new Exception('Relay: Error '. $response->detail);
        endif;

    }
}
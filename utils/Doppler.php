<?php
class Doppler {

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

    public static function subscriber($data) {
        $endPointSubscriber = self::urlBase.urlencode(self::$account).'/lists/'.$data['list'].'/subscribers?api_key='.self::$apiKey;
        $customFields = array(
            array('name' => 'FIRSTNAME', 'Value' => $data['firstname']),
            array('name' => 'LASTNAME', 'Value' => $data['lastname']),
            array('name' => 'AceptoPoliticaPrivacidad', 'Value' => boolval($data['privacy'])),
            array('name' => 'AceptoPromocionesDopplerAliados', 'Value' => boolval($data['promotions'])),
            array('name' => 'tel', 'Value' => $data['phone']),
            array('name' => 'pais', 'Value' => $data['country']),
            array('name' => 'IP', 'Value' => $data['ip']),
            array('name' => 'PaisIP', 'Value' => $data['country_ip']),
            array('name' => 'utmsource', 'Value' => $data['source_utm']),
            array('name' => 'utmmedium', 'Value' => $data['medium_utm']),
            array('name' => 'utmcampaign', 'Value' => $data['campaign_utm']),
            array('name' => 'utmcontent', 'Value' => $data['content_utm']),
            array('name' => 'utmterm', 'Value' => $data['term_utm'])
        );
        $dataSubscriber = array(
		    "email" => $data['email'],
		    "fields" => $customFields
	    );
        $dataJson = json_encode($dataSubscriber);
        $headers = array(
            'Content-Type: application/json',
            'Content: '.strlen($dataJson)
        );
        $response = json_decode(self::executeCurl($endPointSubscriber, $dataJson, $headers, 'POST'));
        if(isset($response->errors)) :
            foreach($response->errors as $error) :
                throw new Exception('Doppler: Error '.$error->key. '->'.$error->detail);
            endforeach;
        endif;
        if(isset($response->errorCode)) :
            throw new Exception('Doppler: Error '.$response->detail);
        endif;    
    }
}

?>

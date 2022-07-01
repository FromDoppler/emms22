<?php
class Doppler {

    private static $apiKey;
    private static $account;
 
    const urlBase = 'https://restapi.fromdoppler.com/accounts/';

    private static function executeCurl($url, $headers) {
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

    public static function subscriber($data,$list) {
        $endPointSubscriber = self::urlBase.urlencode(self::$account).'/lists/'.$list.'/subscribers?api_key='.self::$apiKey;
        $dataSubscriber = array(
		    "email" => $data['email'],
		    "fields" => $data['fields']
	    );
        $dataJson = json_encode($dataSubscriber);
        $headers = array(
            'Content-Type: application/json',
            'Content: '.strlen($dataJson)
        );
        $response = json_decode(self::executeCurl($endPointSubscriber,$headers));
        foreach($response->errors as $error) {
            throw new Exception('Doppler: Error '.$error->key. '->'.$error->detail);
        }

    }
	

}

?>

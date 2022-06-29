<?php
class SecurityHelper {
	private static $ip;
	private static $memcached;
	private static $submissionsKey;
	private static $bannedKey;
	const CAPTCHA_TIME =  86400; // 60*60*24 seconds (24 hours)
	const SUBMISSIONS_TIME = 86400; // 60*60*24 seconds (24 hours)
	const ALLOWED_SUBMISSIONS = 10;
	
	public static function init() {
		if(getIpAddress() != '::1' && getIpAddress() != '127.0.0.1') {
			self::$memcached = new Memcached();
			self::$memcached->addServer('localhost', 11211);
			self::$ip = getIpAddress();
			self::$submissionsKey = 'submissions'.self::$ip;
			self::$bannedKey = 'banned'.self::$ip;
		}
	}
	
	public static function incrementSubmissions() {
		if(SECURITYHELPER_ENABLE == "true") {
			$submissions = self::$memcached->increment(self::$submissionsKey);
			if (!$submissions) {
				$submissions = 1;
				self::$memcached->set(self::$submissionsKey, $submissions, self::SUBMISSIONS_TIME);
			}
			if ($submissions > self::ALLOWED_SUBMISSIONS) {
				self::$memcached->set(self::$bannedKey, true, self::CAPTCHA_TIME);
			}
		}
	}
	
	public static function maximumSubmissionsCount() {
		if(SECURITYHELPER_ENABLE == "true") {
			return  self::$memcached->get(self::$bannedKey);
		} 
		else {
			return 0;
		}	
	}
}
SecurityHelper::init();
?>

<?php
class Validator {

    public static function validateEmail($value) {
        
        if(empty($value)) {
            throw new Exception('Validator: Error Field Required Email');
        }
        elseif(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Validator: Error Field Email Invalid');
        }
        return $value;
    }
    
    public static function validateRequired($key, $value) {
    
        if(empty($value)) {
            throw new Exception('Validator: Error Field Required '.$key);
        }
        return $value;
    }
    
   public static function validateBool($key, $value) {

        if(!is_bool($value)){
            throw new Exception('Validator: Error Field is not Boolean '.$key);
        }
        return $value;

   } 
}    
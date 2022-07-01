<?php
require_once 'spread/write.php';

class SpreadSheetGoogle {

    public static function write($idSpreadSheet, $user, $range) {
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $values = array( array(
            date('h:i:s A'),
            date('d-m-Y'),
            $user['promotions'],
            $user['privacy'],
            $user['firstname'],
            $user['lastname'],
            $user['email'],
            "[" . $user['phone'] . "]",
            $user['country'],
            $user['source_utm'] . " ",
            $user['medium_utm'] . " ",
            $user['campaign_utm'] . " ",
            $user['content_utm'] . " ",
            $user['term_utm'] . " "
        ));
        write_to_sheet($idSpreadSheet, $range, $values);
    } 
}
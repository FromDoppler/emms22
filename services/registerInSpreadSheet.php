<?php

function writeToSheet($user=null, $id=null)
{
    
    require_once './../utils/spread/write.php';
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $ip = "11111";
    $id="1HpSLWrz5lLcUKFyVGGF7PQ2FJvsydTV0IMahZogbQt0";
    $user = array(
        "firstname" => "Peter",
        "lastname" => "Kent",
        "email" => "clark@kent.com",
        "phone" => "123456",
        "country" => "pais",
        "privacy" => "1",
        "promotions" => "1",
        "source_utm" => "source_utm",
        "medium_utm" => "medium_utm",
        "content_utm" => "content",
        "campaign_utm" => "campaign_utm",
        "term_utm" => "term_utm",
        "ip" => $ip,
        "country_ip" => "Messiland"
    );
    
    //columns
    $range = 'A1:N1';
    //data to write
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
    write_to_sheet($user, $id, $range, $values);
}
writeToSheet();
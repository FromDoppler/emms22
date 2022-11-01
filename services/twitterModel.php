<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');


class twitterModel
{

    private $hashtag;
    private $getOpts;
    private $authorization;

    public function __construct($hashtag)
    {

        $this->authorization = BEARER_TOKEN;
        $this->hashtag = $hashtag;
        $this->getOpts = array(
            'http' => array(
                'method' => "GET",
                'header' => "Accept-language: en\r\n" .
                    "Cookie: foo=bar\r\n" .
                    "Authorization: " . $this->authorization . "\r\n"
            )
        );
    }

    public function getAllTweets()
    {
        $context = stream_context_create($this->getOpts);
        try {
            $file = file_get_contents('https://api.twitter.com/2/tweets/search/recent?query=' . $this->hashtag . '&user.fields=profile_image_url&expansions=author_id&max_results=30', false, $context);
        } catch (Exception $e) {
            print_r($e);
        }
        return $file;
    }


    public function getAllTweetsByNewestedId($sinceId)
    {
        $context = stream_context_create($this->getOpts);
        try {
            $file = file_get_contents('https://api.twitter.com/2/tweets/search/recent?query=' . $this->hashtag . '&since_id=' . $sinceId . '&user.fields=profile_image_url&expansions=author_id&max_results=30', false, $context);
        } catch (Exception $e) {
            print_r($e);
        }
        return $file;
    }
}

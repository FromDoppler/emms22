<?php
require_once('./twitterModel.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');



class twitterController
{

    private $twitterModel;
    private $hashtag;

    public function __construct($hashtag)
    {
        $this->hashtag = $hashtag;
        $this->twitterModel = new twitterModel($hashtag);
    }

    public function getAllTweets()
    {
        $tweets = $this->twitterModel->getAllTweets();
        return $tweets;
    }

    public function getAllTweetsByNewestedId($sinceId)
    {
        $tweets = $this->twitterModel->getAllTweetsByNewestedId($sinceId);
        return $tweets;
    }


}


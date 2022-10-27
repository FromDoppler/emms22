<?php
require_once('./twitterModel.php');
require_once('./config.php');


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

$twitterController = new twitterController(HASHTAG);


$json = file_get_contents('php://input');
$data = json_decode($json);

if ($data->method === 'getAllTweets') {
    if ($data->sinceId != '') {
        echo $twitterController->getAllTweetsByNewestedId($data->sinceId );
    } else {
        echo $twitterController->getAllTweets();
    }
} else {
    echo json_encode('otraCosa');
}

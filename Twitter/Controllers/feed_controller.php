<?php 
require '../Models/feed_model.php';

function displayTweets()
{
    $tweets = new Feed;
    $data = $tweets->getTweets();
    if($data)
    {
        return $data;
    }
}
?>
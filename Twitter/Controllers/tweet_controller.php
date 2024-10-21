<?php
session_start();
require '../Models/tweet_model.php';

$tweet = new Tweet;
var_dump($tweet->postTweet());

?>

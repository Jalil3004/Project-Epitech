<?php
session_start();
include '../Controllers/feed_controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="tweet__form" method="post">
        <label>New Tweet</label>
        <input type="text" id="tweet__field" name="message">
        <button type="submit" id="tweet__button">Post</button>
    </form>
    <a href="../Views/account_view.php">
        <button type="submit" id="account__button">Account</button>
    </a>
    <br>
    <?php 
    // var_dump(displayTweets());
    foreach(displayTweets() as $tweet) 
    {
        echo $tweet['message'] . "</br>";          
    }
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="../Ajax/tweet_post_ajax.js"></script>

</html>
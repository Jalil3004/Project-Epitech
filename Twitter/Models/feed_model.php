<?php
require '../database/db.php';

class Feed
{
    public function getTweets()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();
        
        $requestTweet = $connexion->query("SELECT message FROM tweets ORDER BY id DESC LIMIT 50");
        $resultTweet = $requestTweet->fetch_all(MYSQLI_ASSOC);

        if(!empty($resultTweet))
        {
            return $requestTweet;
        } else
        {
            return false;
        }
    }
}
?>
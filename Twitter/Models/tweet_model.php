<?php
require '../database/db.php';

class Tweet
{
    private string $message;
    private string $email;
    private string $nickname;
    

    public function __construct()
    {
        $this->message = $_POST['message'];
        $this->email = $_SESSION['EMAIL'];
        $this->nickname = $_SESSION['NICKNAME'];
    }

    // Tweet text
    public function setText($message)
    {
        $this->message = $message;
    }
    public function getText()
    {
        return $this->message;
    }

    // User email
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    // User nickname
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }
    public function getNickname()
    {
        return $this->nickname;
    }

    public function postTweet()
    {
        $db = new Database();
        $connexion = $db->getConnexion();

        // get user id
        $requestId = $connexion->query("SELECT id FROM users WHERE email = '$this->email' OR nickname = '$this->nickname'");
        $result = $requestId->fetch_all(MYSQLI_ASSOC);
        $userId = $result[0]['id'];

        // Add tweet to db
        $requestInsert = $connexion->query("INSERT INTO tweets (user_id, message)
        VALUE ('$userId', '$this->message')");

        // Display tweet
        $requestDisplay = $connexion->query("SELECT message FROM tweets");
        $resultDisplay = $requestDisplay->fetch_all(MYSQLI_ASSOC);

        return $resultDisplay;
        
    }
}

?>
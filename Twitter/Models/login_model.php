<?php
require '../database/db.php';

class Login
{
    private string $email;
    private string $nickname;
    private string $pass;

    public function __construct()
    {
        $this->email = $_POST['nickname_email'];
        $this->nickname = $_POST['nickname_email'];
        $this->pass = $_POST['pass'];
    }

    // Email
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    // Nickname
    public function setNickname(string $nickname)
    {
        $this->nickname = $nickname;
    }
    public function getNickname()
    {
        return $this->nickname;
    }

    // Pass
    public function setPass(string $pass)
    {
        $this->pass = $pass;
    }
    public function getPass()
    {
        return $this->pass;
    }

    public function login()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        $request = $connexion->query("SELECT * FROM users 
        WHERE email = '$this->email' OR nickname = '$this->nickname' AND password = '$this->pass'"); // password hashé
        $result = $request->fetch_all(MYSQLI_ASSOC);

        $requestTweet = $connexion->query("SELECT message FROM tweets ORDER BY id DESC LIMIT 50");
        $resultTweet = $requestTweet->fetch_all(MYSQLI_ASSOC);

        if(!empty($result))
        {
            return $result;
            
        } else
        {
            return false;
        }
    }
}
?>
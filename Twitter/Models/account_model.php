<?php
require '../Views/account_view.php';

class Account{
    private string $nickname;
    private string $email;

    public function __construct()
    {
        $this->nickname = $_POST['nickname_email'];
        $this->email = $_POST['email'];
    }
    // récupérer les tweets et retweets fais par la personne

    // Nickname
    public function setNickname(string $nickname)
    {
        $this->nickname = $nickname;
    }
    public function getNickname()
    {
        return $this->nickname;
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

    public function accountDisplay()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        $request = $connexion->query("SELECT nickname, email FROM users
        WHERE email = '$this->email' OR nickname = '$this->nickname'");

        return true;
    }
}
?>
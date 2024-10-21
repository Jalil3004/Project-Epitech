<?php
require '../database/db.php';

class SignIn
{
    private string $email;
    private string $nickname;
    private string $pass;

    public function __construct()
    {
        $this->nickname = $_POST['nickname'];
        $this->email = $_POST['email'];
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

    // Pseudo
    public function setPseudo(string $nickname)
    {
        $this->nickname = $nickname;
    }
    public function getLastname()
    {
        return $this->nickname;
    }

    // Password
    public function setPass(string $pass)
    {
        $this->pass = $pass;
    }
    public function getfirstname()
    {
        return $this->pass;
    }

    public function signin()
    {
        $db = new Database();
        $connexion = $db->getConnexion();

        $request = $connexion->query("INSERT INTO users (nickname, email, password) 
        VALUES ('$this->nickname', '$this->email', '$this->pass')"); // password hashé 
        $result = $request->fetch_all(MYSQLI_ASSOC);

        return $result;
    }
}

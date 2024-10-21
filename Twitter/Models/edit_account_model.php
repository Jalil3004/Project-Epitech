<?php
require '../database/db.php';
session_start();

class Account
{
    private string $pseudo;
    private string $email;
    private string $pass;

    public function __construct()
    {
        $this->pseudo = $_POST['pseudo'];
        $this->email = $_POST['emmail'];
        $this->pass = $_POST['pass'];
    }

    // Pseudo
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }
    public function getPseudo()
    {
        return $this->pseudo;
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

    // Password
    public function setPass(string $pass)
    {
        $this->pass = $pass;
    }
    public function getPass()
    {
        return $this->pass;
    }

    public function editAccount()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        $currentPseudo = $_SESSION['PSEUDO'];
        $currentEmail = $_SESSION['EMAIL'];

        // REQUEST ID
        $requestId = $connexion->query("SELECT id FROM member WHERE pseudo = '$currentPseudo' AND email = '$currentEmail'");
        $result = $requestId->fetch_all(MYSQLI_ASSOC);
        $userId = $result[0]['id'];

        // REQUEST UPDATE
        $requestUpdate = $connexion->query("UPDATE member
        SET pseudo = '$this->pseudo',
        email = '$this->email'
        password = SHA1('$this->pass') 
        WHERE id = $userId");
        
        $_SESSION['PSEUDO'] = $this->pseudo;
        $_SESSION['EMAIL'] = $this->email;
        $_SESSION['PASSWORD'] = $this->pass;
        
        return true;
    }
}
?>
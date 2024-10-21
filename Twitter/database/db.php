<?php
class Database {
    private $connexion = null;
    
    public function __construct() {
        $this->connexion = new mysqli('localhost', 'root', 'Ma22Rie12', 'tweet_academie');

        if ($this->connexion == null) {
            echo 'Connexion failed';
            die(mysqli_error($this->connexion));
        };
    }
    public function getConnexion(){
        return $this ->connexion;
    }
}
?>
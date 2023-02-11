<?php
session_start();
class MyDataBase{
    


    public $db;
    public $button;
    // En résumé je créer ma class j'instance $db pour l'utiliser dans toute mes fonction avec $this->db et qu'il soit reconnu


    public function connect_to_db($user,$password){
      
        try{
       $this->db = new PDO ('mysql:host=localhost;dbname=meetic',"$user","$password"); // mettre des guillemet pour user et password
        }
        catch (PDOException $e){
            echo "Erreur" . $e->getMessage();
            //je try et catch  avec pdo exception qui sert a en gros a essayer l'erreur si sa echoue il affiche Erreur avec l'erreur en question
        }
    }

    public function add_user_to_db(){
       
       
        
        extract($_POST);
       
            $mdp=password_hash($mdp,PASSWORD_DEFAULT);
        $statement=  $this->db->prepare("INSERT INTO users  VALUES (null,?,?,?,?,?,?,?,?)"); // donc en PDO je prepare une requete qui renvoie un object du coup
        //je dois l'executer ensuite avec execute (Prépare une requête SQL à être exécutée par la méthode PDOStatement::execute())
        $statement ->execute([$email,$mdp,$prenom,$nom,$genre,$age,$city,$hobbi]);
        $_SESSION["email"]=$email;
        $_SESSION["firstname"]=$prenom;
        $_SESSION["lastname"]=$nom;
        $_SESSION["age"]=$age;
        $_SESSION["genre"]=$genre;
        $_SESSION["hobbi"]=$hobbi;
        // echo json_encode(array("type" => "success", "message" => "connexion reussi","age" => $age));
    
    // else{
    //     echo "erreur";
    // }
}







}







?>
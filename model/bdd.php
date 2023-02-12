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
  if (!empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['genre']) && !empty($_POST['age']) && !empty($_POST['city']) && !empty($_POST['hobbi'])) {
    extract($_POST);
    $mdp=password_hash($mdp,PASSWORD_DEFAULT);
    $today = new DateTime();
    $birthdate = new DateTime($age);
    $interval = $today->diff($birthdate);
    if ($interval->y >= 18) {
    $statement=  $this->db->prepare("INSERT INTO users  VALUES (null,?,?,?,?,?,?,?,?,'active')");
    $statement ->execute([$email,$mdp,$prenom,$nom,$genre,$age,$city,$hobbi]);
    $_SESSION["email"]=$email;
    $_SESSION["firstname"]=$prenom;
    $_SESSION["lastname"]=$nom;
    $_SESSION["age"]=$age;
    $_SESSION["genre"]=$genre;
    $_SESSION["hobbi"]=$hobbi;
             
    http_response_code(200);
    echo json_encode(array("type" => "success", "message" => "connexion reussi"));
  }
  else {
    echo json_encode(array("type" => "error", "message" => "L'âge minimum requis pour s'inscrire est de 18 ans."));
}
} 
else {

         
echo json_encode(array("type" => "error", "message" => "remplir tout les champs"));
}
}
}





?>
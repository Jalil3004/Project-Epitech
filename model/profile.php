<?php
session_start();
class MyEdit{
    


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
    
    public function edit_user_to_db(){
        $themail = $_SESSION["email"];
        $req= $this->db->query("SELECT firstname,lastname,email FROM users WHERE email='" . $themail . "'"); 
        
        // $row = mysqli_fetch_assoc($req);
          //verifier que le bouton ajouter a bien été cliquer
         
              //extraction des informations envoyé dans des variables par la méthode POST
              extract($_POST);
              //verifier que tout les champs ont été remplis
              if (!empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['genre']) && !empty($_POST['age']) && !empty($_POST['city']) && !empty($_POST['hobbi'])){
                $pass=password_hash($pass,PASSWORD_DEFAULT);
                  //requete de modification
                  $req= $this->db->query(" UPDATE users SET pass ='$pass',firstname ='$firstname',email='$email',hobbi='$hobbi',age='$age',gender='$genre',lastname='$lastname' WHERE email='" . $themail . "'");
                  //si la requête a été effectuée avec succès , on fait une redirection
                    $_SESSION["email"]=$email;
                    $_SESSION["firstname"]=$firstname;
                    $_SESSION["age"]=$age;
                    $_SESSION["hobbi"]=$hobbi;
                    $_SESSION["lastname"]=$lastname;
                    $_SESSION["genre"]=$genre;
                    http_response_code(200);
                    echo json_encode(array("type" => "success", "message" => "modification reussi"));
                  
                  
                  }
               else{ //sinon
                           
echo json_encode(array("type" => "error", "message" => "remplir tout les champs"));
              }
          
}

}

?>
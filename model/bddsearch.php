<?php
session_start();
class MySearch{
    


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
    
    public function search_user_to_db(){
        extract($_POST);
        // $themail = $_SESSION["email"];
       $age =explode("-",$age);
       $age_min=$age[0];
       $age_max=$age[1];
       

        
        $statement=  $this->db->prepare("SELECT * FROM users WHERE (city='$city' OR  gender='$genre' OR age BETWEEN '$age_min' AND '$age_max' OR hobbi ='$Hobbi' OR hobbi='$otherhobbi') OR (city='$city' AND  gender='$genre' AND age BETWEEN '$age_min' AND '$age_max' AND hobbi ='$Hobbi' AND hobbi='$otherhobbi')"); // donc en PDO je prepare une requete qui renvoie un object du coup
        //je dois l'executer ensuite avec execute (Prépare une requête SQL à être exécutée par la méthode PDOStatement::execute())
        
        $statement ->execute();
        $resultat = $statement->fetchAll();
        $_SESSION['res']=$resultat;
        
        
        
        // $row = mysqli_fetch_assoc($req);
          //verifier que le bouton ajouter a bien été cliquer
         
              //extraction des informations envoyé dans des variables par la méthode POST
              
              //verifier que tout les champs ont été remplis
            //   if (isset($firstname) ){
            //     $pass=password_hash($pass,PASSWORD_DEFAULT);
            //       //requete de modification
            //       $req= $this->db->query(" UPDATE users SET pass ='$pass',firstname ='$firstname',email='$email',hobbi='$hobbi',age='$age',gender='$genre',lastname='$lastname' WHERE email='" . $themail . "'");
            //       if($req){ //si la requête a été effectuée avec succès , on fait une redirection
            //         $_SESSION["email"]=$email;
            //         $_SESSION["firstname"]=$firstname;
            //         $_SESSION["age"]=$age;
            //         $_SESSION["hobbi"]=$hobbi;
            //         $_SESSION["lastname"]=$lastname;
            //         $_SESSION["genre"]=$genre;
                    
                    
                  
            //       }else{ // sinon
            //           $message="Employé non ajouté";
            //       }
            //   } else{ //sinon
            //       $message="Remplisser les champs";
            //   }
          
}

}


?>
<?php
session_start();
class MyConnect{
    


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

    

public function connect_user(){
    extract($_POST);
        $statement=  $this->db->query("SELECT * FROM users WHERE email ='$email'"); // donc en PDO je prepare une requete qui renvoie un object du coup
        //je dois l'executer ensuite avec execute (Prépare une requête SQL à être exécutée par la méthode PDOStatement::execute())
      
        if($statement ->rowCount() > 0){
            
            $tab= $statement->fetchAll();
           
          
           
            if(password_verify($mdp,$tab[0]["pass"])){
                
               
        http_response_code(200);
        echo json_encode(array("type" => "success", "message" => "connexion reussi", "email" => $email));
        
       
        // while($row = $statement->fetch()) {


        //   echo $row['age'];


        // }



      
    }   
    else{
        echo json_encode(array("type" => "error", "message" => "mot de passe incorrect"));
    }

} 
else{   
    echo json_encode(array("type" => "error", "message" => "email incorrect"));
}

}





}







?>
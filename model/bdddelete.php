<?php
session_start();
class MyDelete{
    


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
    
    public function delete_user_to_db(){
        extract($_POST);
        $themail = $_SESSION["email"];
        $req= $this->db->query("UPDATE users SET statut='deleted' WHERE email='" . $themail . "'"); 
        
   if($req){
    echo "compte supprimé";
   }
}

}
$data = new MyDelete();
$data->connect_to_db("root","epitech");
$data->delete_user_to_db();
?>
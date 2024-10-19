<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="inscription.css"> 
    <title>Document</title>
</head>
<body>

    <?php
    
    //connexion a la base de donnée
      include_once "Connexion.php";
      //on recupere l'id dans le lien
     
      
      //requete pour afficher les infos d'un user
    //   $req= mysqli_query($con, "SELECT membership.id,id_user,id_subscription FROM user INNER JOIN membership ON id_user=user.id INNER JOIN subscription ON id_subscription = subscription.id;");
      
      
      //verifier que le bouton ajouter a bien été cliquer
      if(isset($_POST["button1"])){
          //extraction des informations envoyé dans des variables par la méthode POST
          extract($_POST);
          //verifier que tout les champs ont été remplis
          if (isset($id) ){
              
              //requete de modification
              $req = mysqli_query($con, "INSERT INTO membership (id,id_user,id_subscription) VALUES ('$id','$id_user','$id_subscription');");
             
                
                if($req){ //si la requête a été effectuée avec succès , on fait une redirection
                    header("location: subscription.php"); 
                }else{ // sinon
                    $message="Employé non ajouté";
                }
            } else{ //sinon
                $message="Remplier les champs";
            }
        }
    ?>

    <p class="erreur_message">
        <?php
        // si la variable existe affiche son contenue
        if(isset($message)){
            echo $message;
        }
        
        ?>

    </p>
    <!-- <form action="" method="POST">
        <a href="index.php">Retour</a>
        <div>
            <label for="name">id :</label>
            <input type="text" id="name" name="id" >
        </div>
        <div>
            <label for="nickname">id_user:</label>
            <input type="text" id="name" name="id_user" >
        </div>
        <div>
            <label for="nickname">id_subsbriscption :</label>
            <input type="text" id="name" name="id_subscription" >
        </div>
        
        <div>
            <input type="submit" value="ajouter" name="button1">
        </div>
    
    </form> -->

    <div class="login-box">
  <h2>Add User</h2>
    <form  method="POST" action="">
    
    <div class="user-box">
    
    <input type="text" id="name" name="id" placeholder="id" >
    </div>
    <div class="user-box">
        
    <input type="text" id="name" name="id_user"  placeholder="id_user">
    </div>
    <div class="user-box">
        
    <input type="text" id="name" name="id_subscription"  placeholder="id_subscription" >
    </div>
    <button type="submit" name="button1" class="btn btn-danger">Envoyer</button>
  </form>
    </div>
    
</body>
</html>
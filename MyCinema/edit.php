
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
      $id =$_GET['id'];
      
      //requete pour afficher les infos d'un user
      $req= mysqli_query($con, "SELECT firstname,lastname,id_subscription,membership.id FROM membership INNER JOIN user ON id_user=user.id INNER JOIN subscription ON id_subscription=subscription.id   WHERE membership.id=$id;
      "); 
      
      $row = mysqli_fetch_assoc($req);
        //verifier que le bouton ajouter a bien été cliquer
        if(isset($_POST["button"])){
            //extraction des informations envoyé dans des variables par la méthode POST
            extract($_POST);
            //verifier que tout les champs ont été remplis
            if (isset($name) ){
                
                //requete de modification
                $req = mysqli_query($con, " UPDATE membership SET id_subscription ='$name' WHERE id=$id;
                ");
                if($req){ //si la requête a été effectuée avec succès , on fait une redirection
                    header("location: subscription.php"); 
                }else{ // sinon
                    $message="Employé non ajouté";
                }
            } else{ //sinon
                $message="Remplisser les champs";
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
            <label for="name">Nom :</label>
            <input type="text" id="name" name="firstname" value="<?=$row["firstname"]?>">
        </div>
        <div>
            <label for="nickname">Prenom :</label>
            <input type="text" id="name" name="lastname" value="<?=$row["lastname"]?>">
        </div>
        <div>
            <label for="city">Abonnement :</label>
            <input type="text" id="city" name="name" value="<?=$row["id_subscription"]?>">
        </div>
        <div>
            <input type="submit" value="ajouter" name="button">
        </div>
    
    </form> -->
    <div class="login-box">
  <h2>Modifier</h2>
    <form  method="POST" action="">
    
    <div class="user-box">
    
    <input type="text" id="name" name="firstname" value="<?=$row["firstname"]?>">
    </div>
    <div class="user-box">
        
    <input type="text" id="name" name="lastname" value="<?=$row["lastname"]?>">
    </div>
    <div class="user-box">
        
        <input type="text" id="city" name="name" placeholder="ID SUBSCRIPTION" value="<?=$row["id_subscription"]?>">
    </div>
    <button type="submit" name="button" class="btn btn-danger">Envoyer</button>
  </form>
    </div>
    
</body>
</html>
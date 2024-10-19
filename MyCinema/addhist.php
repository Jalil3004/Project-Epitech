


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
     $id =$_GET['id'];
    //connexion a la base de donnée
      include_once "Connexion.php";
      //on recupere l'id dans le lien
     
      
      //requete pour afficher les infos d'un user
    //   $req= mysqli_query($con, "SELECT  title, id_membership,id_session FROM membership_log  INNER JOIN movie_schedule ON id_session=movie_schedule.id  INNER JOIN movie ON id_movie=movie.id  INNER JOIN membership ON membership.id=id_membership WHERE id_membership=$id;
    //   "); 
      
    //   $row = mysqli_fetch_assoc($req);
        //verifier que le bouton ajouter a bien été cliquer
        if(isset($_POST["button"])){
            //extraction des informations envoyé dans des variables par la méthode POST
            extract($_POST);
            //verifier que tout les champs ont été remplis
            if (isset($id_session) ){
                
                //requete de modification
                $req = mysqli_query($con, "INSERT INTO membership_log  VALUES ('$id','$id_session')");
                
                if($req){ //si la requête a été effectuée avec succès , on fait une redirection
                    header("location: hist.php?id=$id"); 
                }else{ // sinon
                    $message="Employé non ajouté";
                }
            } else{ //sinon
                $message="Remplir les champs";
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
  
    <div class="login-box">
  <h2>Modifier Historique</h2>
    <form  method="POST" action="">
    
    <div class="user-box">
    
    <input type="text" id="name" name="id_membership" value="<?=$_GET["id"]?>">
    </div>
    <div class="user-box">
        
    <input type="text" id="name"  placeholder ="ID SESSION" name="id_session" >
    </div>
 
    <button type="submit" name="button" class="btn btn-danger">Envoyer</button>
  </form>
    </div>
    
</body>
</html>
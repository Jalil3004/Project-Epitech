

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="accueil.css"> 
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
          <a class="navbar-brand" href="accueil.html"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="accueil.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Connexion</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="subscription.php">Membre</a></li>
                  <li><a class="dropdown-item" href="searchdate.php">Search Date</a></li>
                  <li><a class="dropdown-item" href="membre.php">Search User</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="addseance.php">Add seance</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <?php
     
    //connexion a la base de donnée
      include_once "Connexion.php";
      //on recupere l'id dans le lien
      $req1= mysqli_query($con, "SELECT id_movie,id_room,date_begin,title FROM movie_schedule INNER JOIN movie ON id_movie=movie.id ORDER BY date_begin DESC ;
      "); 
      
      $row = mysqli_fetch_assoc($req1);
      
      //requete pour afficher les infos d'un user
      
        //verifier que le bouton ajouter a bien été cliquer
        if(isset($_POST["button"])){
            //extraction des informations envoyé dans des variables par la méthode POST
            extract($_POST);
            //verifier que tout les champs ont été remplis
            if (isset($id_movie) ){
                
                //requete de modification
                $req = mysqli_query($con, "INSERT INTO movie_schedule  VALUES (null,'$id_movie','$id_room','$date_begin');");
                
                
                if($req){ //si la requête a été effectuée avec succès , on fait une redirection
                    header("location: addseance.php"); 
                    // header("location: hist.php?id=$id_membership"); 
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
    <form action="" method="POST">
        <a href="index.php">Retour</a>
        <div>
            <label for="name">id_movie :</label>
            <input type="number" id="name" name="id_movie" >
        </div>
        <div>
            <label for="nickname">salle :</label>
            <input type="number" id="name" name="id_room" >
        </div>
        <div>
            <label for="name">date :</label>
            <input type="datetime-local" id="name" name="date_begin" >
        </div>
        
        
        <div>
            <input type="submit" value="ajouter" name="button">
        </div>
    
    </form>
    <?php
            

        if(mysqli_num_rows($req1)== 0){
        //  echo "Utilisateur introuvable";
        }
        else{
           
           
            while($row=mysqli_fetch_assoc($req1)){  
                
                ?>
                <table>
                 <tr>
                    
                    <td><?=$row['title']?></td>  
                    <td><?=$row['id_room']?></td>  
                    <td><?=$row['date_begin']?></td>  
                    
                   
                    
                    
                    
                </tr>
                </table>
                
                
                <?php
            }
        }

        
    


            ?>
    

    
</body>
</html>
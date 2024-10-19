
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
    
   
    <form method="GET">

    <input type="search" name="s" placeholder="firstname">
    <input type="search" name="s1" placeholder="lastname">
    <input type="submit" name="envoyer1">

    </form>

<?php
 include_once "Connexion.php";
 //on recupere l'id dans le lien
 //requete pour afficher les infos d'un user

if(isset($_GET['s']) AND !empty($_GET['s']) OR isset($_GET['s1']) AND !empty($_GET['s1'])){
    $recherche = htmlspecialchars($_GET['s']);
    $recherche1 = htmlspecialchars($_GET['s1']);

    $req= mysqli_query($con, 'SELECT firstname,lastname FROM user WHERE firstname LIKE "%'.$recherche.'%" AND lastname LIKE "%'.$recherche1.'%"'); 
    if(mysqli_num_rows($req)== 0){
        //  echo "Utilisateur introuvable";
        }
        else{
            while($row=mysqli_fetch_assoc($req)){  
                
                ?>
                <table>
                 <tr>
                
                    <td><?=$row['firstname']?></td>  
                    <td><?=$row['lastname']?></td>  
                    
                </tr>
                </table>
                
                <?php
            }
        }
}

else{
    echo "recherche par nom ou prénom";
}



?>

</body>
</html>
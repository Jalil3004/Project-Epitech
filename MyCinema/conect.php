

<?php
include_once "Connexion.php";
 //on recupere l'id dans le lien
 //requete pour afficher les infos d'un user


    // $input1 = $_POST['s'];
    // $input2 = $_POST['s1'];
    // $input3 = $_POST['s2'];
    if(isset($_POST["button"])){
        //extraction des informations envoyé dans des variables par la méthode POST
        extract($_POST);
if(isset($_POST['n1']) AND !empty($_POST['n1']) ){
    $p1= password_hash($p1,PASSWORD_DEFAULT);
    $req= $con-> query("INSERT INTO conexion (pseudo,mail,mdp) VALUES('$n1','$m1','$p1');"); 
    header("location: conect.php" ); 

}

    }


?>

?>
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
      <div class="login-box">
  <h2>Conexion</h2>
  <form  method="POST" action="accueil.html">
    
    <div class="user-box">
      <input type="mail" name="m2" value="">
      <label>mail</label>
    </div>
    <div class="user-box">
      <input type="password" name="p2" required="">
      <label>Password</label>
    </div>
    <button type="submit" class="btn btn-danger">Envoyer</button>
  </form>
</div>




</body>
</html>
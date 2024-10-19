<?php session_start()  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="inscription.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <script src="../Ajax/ajaxco.js"></script>
      
      <div class="main-block">
        <div class="left-part">
          <i class="fas fa-graduation-cap"></i>
          <h1>Recherche ton Ame soeur</h1>
          <p>Site de rencontre qui permet de ton trouver la personne qui te corerspond.</p>
          <div class="btn-group">
            <a class="btn-item" href="../view/inscription.php">Inscription</a>
            <a class="btn-item" href="../view/connexion.php">Connexion</a>
          </div>
        </div>
        <?php
        ?>
        <form method="post" id="formco"  action="">
          
          <div class="title">
            <i class="fas fa-pencil-alt"></i> 
          <h2>Connexion</h2>
        </div>
        <div class="info">
        

          <label for="email">Email</label>
          <input type="text" id="email" name="email"><br>
         
        <label for="mdp">Mot de passe</label>
        <input type="password" id="mdp" name="mdp"><br>
<!--          
        <?php
            if(isset($_SESSION["email"])){
                echo "vous êtes connecté en tant que : ". $_SESSION["email"] ;
            }
        ?>
           -->

         
        </div>
       
        <button type="submit"  id="thebtnco" name="btnn">Submit</button>
      </form>
    </div>
  
    <div  id="divaa"></div>
    <span id="statuss"></span>



    
      
</body>
</html>
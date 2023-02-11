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
      <script src="../Ajax/ajaxmain.js"></script>
      
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
        //require ici

        ?>
        <form method="post" id="form"  action="">
          
          <div class="title">
            <i class="fas fa-pencil-alt"></i> 
          <h2>Inscription</h2>
        </div>
        <div class="info">
          <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom"><br>

        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="prenom"><br>

          <label for="email">Email</label>
          <input type="text" id="email" name="email"><br>
         
        <label for="mdp">Mot de passe</label>
        <input type="password" id="mdp" name="mdp"><br>
         
        <label for="genre">Civilite</label>
        <p><input type="radio" name="genre" value="m" checked>Homme
        <input type="radio" name="genre" value="f">Femme
        <input type="radio" name="genre" value="a">Autre<br>
        
        <label for="city">City</label>
        <input type="text" id="city" name="city"><br>
        
        <label for="age">Age</label>
        <input type="text" id="age" name="age"><br>

        <label for="Hobbies">Hobbies</label>
        <input type="text" id="hobbi" name="hobbi"><br>

         
        </div>
       
        <button type="submit"  id="thebtn" name="btnn">Submit</button>
      </form>
    </div>
  
    <div  id="diva"></div>
    <span id="status"></span>



    
      
</body>
</html>
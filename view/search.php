<?php  session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="profil.css">
    <script src="../Ajax/carou.js"></script>


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
              <div class="dropdown">
  <a href="#">Menu déroulant</a>
  <div class="dropdown-content">
    <a href="#">Lien 1</a>
    <a href="#">Lien 2</a>
    <a href="#">Lien 3</a>
  </div>
</div>
            </ul>
          </div>
        </div>
      </nav>

<!-- <?php require_once('../controler/mainsearch.php')  ?> -->
     
      <form method="post" id="formsearch"  action="">
          
          <div class="title">
            <i class="fas fa-pencil-alt"></i> 
          <h2>Recherche</h2>
        </div>
        <div class="info">
       
        <label for="genre">Civilite</label>
        <p><input type="radio" name="genre" value="Homme" >Homme
        <input type="radio" name="genre" value="Femme">Femme
        <input type="radio" name="genre" value="Autre">Autre<br>
        
        <label for="city">City</label>
        <input type="text" id="city" name="city"><br>
        
        <label for="Age">Age</label>
        <p><input type="radio" name="age" value="18-25" >18/25
        <input type="radio" name="age" value="25-35">25/35
        <input type="radio" name="age" value="35-45" >35/45<br>
        <input type="radio" name="age" value="45-200">45+<br>

        <label for="Hobbi">Choose a Hobbi:</label>
        <select id="Hobbi" name="Hobbi">
        <option value="">--Please choose an option--</option>
          <option value="Dance">Dance</option>
          <option value="Skateboard">Skateboard</option>
          <option value="Manga">Manga</option>
          <option value="Licorne">Licorne</option>
          <option value="Cuisiner">Cuisiner</option>
        </select> 
        <br><label for="Hobbies"> Autres</label>
        <input type="text" id="hobbi" name="otherhobbi"><br>

         
        </div>
       
        <button type="submit"  id="thebtnsearch" name="btnn">Submit</button>
      </form>
     
<div id="carousel">
        <?php
 $resultat=$_SESSION['res'];

 foreach ($resultat as $row){
  ?>
  <div class="slide">
    <div class="card">
      <div class="card-header">
        <h3><?=$row['lastname']?> <?=$row['firstname']?></h3>
      </div>
      <div class="card-body">
        <p><?=$row['firstname']?></p> 
      <p><?=$row['lastname']?></p> 
 <p><?=$row['gender']?></p> 
 <p><?=$row['hobbi']?></p> 
 <p><?=$row['city']?></p> 
 <p><?=$row['age']?></p> 
      </div>
    </div>
  </div>


  <?php
 }

?>

</div>
<<div id="prev" style="float:left;">Prev</div>
<div id="next" style="float:right;">Next</div>


    
      
</body>
</html>
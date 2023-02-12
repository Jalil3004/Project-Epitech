<?php  session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="../Ajax/search.js"></script>
    <link rel="stylesheet" href="profil.css">
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
                <div class="dropdown">
  <a href="#">Menu déroulant</a>
  <div class="dropdown-content">
    <a href="#">Lien 1</a>
    <a href="#">Lien 2</a>
    <a href="#">Lien 3</a>
  </div>
</div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <script src="../Ajax/ajaxdelete.js"></script>
    
 <!-- <?php
if (isset($_SESSION["email"])){

  echo $_SESSION["lastname"] . "\n";;
  echo  $_SESSION["firstname"] . "\n";;
  echo  $_SESSION["age"] . "\n";;
  echo  $_SESSION["genre"] . "\n";;
 echo $_SESSION["email"] . "\n";
 echo $_SESSION["hobbi"] . "\n";;


}

?> -->
<!-- <form    action="">
          
          <div class="title">
            <i class="fas fa-pencil-alt"></i> 
          <h2>Bienvenue :  <?=$_SESSION['lastname']?></h2>
        </div>
        <div class="info">
        

          <p>Lastname: <?=$_SESSION['lastname']?> </p><br>
          <p>Firstname: <?=$_SESSION['firstname']?> </p><br>
          <p>Age: <?=$_SESSION['age']?> </p><br>
          <p>Genre: <?=$_SESSION['genre']?> </p><br>
          <p>Email: <?=$_SESSION['email']?> </p><br>
          <p>Hobbi: <?=$_SESSION['hobbi']?> </p><br>

          <td><a href="" id="btndelete">supprimer</a></td>
          
        
          
        -->
        
        
        <!-- </div>
        
        
      </form>   -->
      
      <div class="container">
        
        <div class="card">
          <img src="https://lh3.googleusercontent.com/oUUiPB9sq3ACq4bUaRmo8pgvC4FUpRRrQKcGIBSOsafawZfRpF1vruFeYt6uCfL6wGDQyvOi6Ez9Bpf1Fb7APKjIyVsft7FLGR6QqdRFTiceNQBm1In9aZyrXp33cZi9pUNqjHASdA=s170-no" alt="" class="card__image">
          <p class="card__name"><?=$_SESSION['lastname']?> <?=$_SESSION['firstname']?> </p>
          <div class="grid-container">
            
            
            <p>Lastname: <?=$_SESSION['lastname']?> </p><br>
            <p>Firstname: <?=$_SESSION['firstname']?> </p><br>
            <p>Age: <?=$_SESSION['age']?> </p><br>
            <p>Genre: <?=$_SESSION['genre']?> </p><br>
            <p>Email: <?=$_SESSION['email']?> </p><br>
            <p>Hobbi: <?=$_SESSION['hobbi']?> </p><br>
          </div>
          
          <button class="btn draw-border"><a href="edit.php?id=<?=$_SESSION["email"]?>">Edit</a></button>
          <button class="btn draw-border" id="btndelete" >Delete </button>
          <button class="btn draw-border" >
          <a href="../view/search.php">Search</a>
        </button>

          
          
          <!-- <td><a href="edit.php?id=<?=$_SESSION["email"]?>">modifier</a></td> -->
  </div>
  
</div>



    
      
</body>
</html>
<?php session_start() ?>
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
<script src="../Ajax/ajaxprofil.js"></script>

    <div class="login-box">
  <h2>Modifier</h2>
    <form  method="POST" id="formedit" action="">
    
    <div class="user-box">
    <label for="nom">Prénom</label>
    <input type="text" id="name" name="firstname" >
    </div>
   
        <div class="user-box">
        <label for="nom">Nom</label>
        <input type="text" id="name" name="lastname" >
        </div>
        <div class="user-box">
    <label for="nom">Email</label>
    <input type="text" id="name" name="email" >
    </div>
    <div class="user-box">
    <label for="nom">Hobbi</label>
    <input type="text" id="name" name="hobbi" >
    </div>
    <div class="user-box">
    <label for="nom">Age</label>
    <input type="date" id="name" name="age" >
    </div>
    <div class="user-box">
    <label for="nom">Genre</label>
    <input type="text" id="name" name="genre" >
    </div>
    <div class="user-box">
    <label for="nom">Mot de passe</label>
    <input type="text" id="name" name="pass" >
    </div>
  
    <button type="submit" name="button" id="btnedit"class="btn btn-danger">Envoyer</button>
  </form>
    </div>
    
</body>
</html>
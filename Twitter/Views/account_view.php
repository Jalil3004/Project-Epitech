<?php
session_start();
if(!isset($_SESSION['EMAIL']))
{
    // header('Location: http://localhost/W-PHP-501-LIL-1-1-mymeetic-marie.robertson/view/login.php?');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b87d756cc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Views/account.css"> 
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="../Views/assets/logo.png">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <!-- <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul> -->
          </div>
        </div>
      </nav>
  <div class="cover">

      <img src="../Views/assets/user.png" alt="Avatar"> 
      <img id ="monster" src="../Views/assets/Capture_d_écran_2023-02-21_20-01-17-removebg-preview(1).png">
</div>
<div class="info">
    <div id="ovale"></div>
    <h1><?php echo $_SESSION['NICKNAME'] ?></h1>
    <p><?php echo $_SESSION['EMAIL'] ?></p>
    <p>A rejoint Twitter en septembre 2022</p>
    <p>7 Abonnement 6 Abonnés</p>
</div>

<div class="bio">
    <h1>@Jm_plouk</h1>
    <p><b>1023 </b>Abonnements</p>
    <p><b>122K </b> Abonnés</p><br>
    <p><b>"J'adore jouer et grimper partout"</b>"</p>
</div>
<hr>
<div class="tweet">
<div class="bulle">
<h2>@Jm_plouk</h2>
<p>C'est mon premier tweet je suis timide <br>#shy</p>
<div class="buttons">
<i class="fa-regular fa-comment"></i>
<i class="fa-solid fa-retweet"></i>
<i class="fa-regular fa-heart"></i>
</div>
</div>
    <p><?php echo $_SESSION['TWEETS'] ?></p>
<h2>
    Qui suivre 
</h2>
</div>

</body>
</html>
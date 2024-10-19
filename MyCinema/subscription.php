
<?php
 include_once "Connexion.php";
 //on recupere l'id dans le lien
 //requete pour afficher les infos d'un user
 


$req= mysqli_query($con, 'SELECT DISTINCT firstname,lastname,id_subscription,membership.id,subscription.name FROM membership INNER JOIN user ON user.id=id_user INNER JOIN subscription ON id_subscription=subscription.id ORDER BY membership.id ASC;
'); 

//pagination
// $count=mysqli_prepare($con,"SELECT COUNT(*) AS id FROM membership;");
// ;
// $count->execute();

$num_for_page=10;

if(isset($_GET["page"])){
  $page=$_GET["page"];
}
else{
  $page=1;
}

$start_from=($page-1)*10;
$req= mysqli_query($con, "SELECT DISTINCT firstname,lastname,id_subscription,membership.id,subscription.name FROM membership INNER JOIN user ON user.id=id_user INNER JOIN subscription ON id_subscription=subscription.id ORDER BY membership.id ASC LIMIT $start_from,$num_for_page;
"); 

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
    <?php
   

        if(mysqli_num_rows($req)== 0){
        //  echo "Utilisateur introuvable";
        }
        else{
            ?>
              
                <button type="submit" class="btn btn-danger"><a href="adduser.php">Add User</a></button>
               
            <?php
            while($row=mysqli_fetch_assoc($req)){  
                
                ?>
                <!-- <table>
                 <tr>
                     
                     <td><?=$row['id']?></td> 
                    <td><?=$row['firstname']?></td>  
                    <td><?=$row['lastname']?></td>  
                    <td><?=$row['name']?></td> 
                    
                    <td><a href="edit.php?id=<?=$row["id"]?>">modifier</a></td>
                    <td><a href="supprimer.php?id=<?=$row["id"]?>">supr</a></td>
                    <td><a href="hist.php?id=<?=$row["id"]?>">historique</a></td>
                    
                    
                </tr>
                </table> -->
              
                <div class="header_fixed">
                    <table>
                        <thead>
                <tr>
                    <th>S No.</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Abonnement</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Historique</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?=$row['id']?></td> 
                <td><?=$row['firstname']?></td>  
                    <td><?=$row['lastname']?></td>  
                    <td><?=$row['name']?></td> 
                    
                    <td><a href="edit.php?id=<?=$row["id"]?>">modifier</a></td>
                    <td><a href="supprimer.php?id=<?=$row["id"]?>">delete</a></td>
                    <td><a href="hist.php?id=<?=$row["id"]?>">historique</a></td>
                    
                    
                </tr>
              
            </tbody>
        </table>
    </div>
                
                <?php
            }
        }
        $req= mysqli_query($con, 'SELECT DISTINCT firstname,lastname,id_subscription,membership.id,subscription.name FROM membership INNER JOIN user ON user.id=id_user INNER JOIN subscription ON id_subscription=subscription.id ORDER BY membership.id ASC');
            
            $total_records=mysqli_num_rows($req);
            $total_pages=ceil($total_records/$num_for_page);
            
            for ($i=1;$i<=$total_pages;$i++){
              echo "<a href='subscription.php?page=".$i."'>"." ".$i."</a>";
            }


        
    


            ?>

    



</body>
</html>
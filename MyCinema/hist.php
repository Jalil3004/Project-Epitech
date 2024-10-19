<?php
 include_once "Connexion.php";
 //on recupere l'id dans le lien
 $id =$_GET['id'];
 
 //requete pour afficher les infos d'un user
 $req= mysqli_query($con, "SELECT  title, id_membership FROM membership_log  INNER JOIN movie_schedule ON id_session=movie_schedule.id  INNER JOIN movie ON id_movie=movie.id  INNER JOIN membership ON membership.id=id_membership WHERE id_membership=$id;
 "); 
 


// SELECT  title, id_membership FROM membership_log  INNER JOIN movie_schedule ON id_session=movie_schedule.id  INNER JOIN movie ON id_movie=movie.id  INNER JOIN membership ON membership.id=id_membership WHERE
// id_membership=75;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"> 
    <title>Document</title>
</head>
<body>

   
   
    <?php
            

        if(mysqli_num_rows($req) >= 0){
        //  echo "Utilisateur introuvable";
        
    ?>
        <a href="addhist.php?id=<?=$_GET["id"]?>">ajouter</a>
        <?php
        while($row=mysqli_fetch_assoc($req)){  
            
            ?>
            <table>
             <tr>
                
                <td><?=$row['id_membership']?></td>  
                <td><?=$row['title']?></td>  
                <!-- <td><a href="addhist.php?id=<?=$row["id_membership"]?>">ajouter</a></td> -->
               
                
                
                
            </tr>
            </table>
            
            
            <?php
        }
        }
        

        
    


            ?>

    



</body>
</html>

<?php
include "subscription.php";
$id= $_GET['id'];
$req = mysqli_query($con,"DELETE FROM membership  WHERE id=$id;");
// DELETE FROM membership  WHERE id_user=6;
if($req){ //si la requête a été effectuée avec succès , on fait une redirection
 


}else{ // sinon
    $message="Employé non ajouté";
}



?>



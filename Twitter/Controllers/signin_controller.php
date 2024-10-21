<?php 
require '../Models/signin_model.php';

$new_member = new SignIn();
echo $new_member->signin();

?>
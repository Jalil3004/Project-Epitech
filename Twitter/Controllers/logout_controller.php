<?php
require '../Models/logout_model.php';

$logout = new Logout();
echo $logout->logout();
?>
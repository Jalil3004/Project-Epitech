<?php
session_start();
session_destroy();
header('location: ../view/connexion.php');
exit;
?>
<?php
session_start();
require '../Models/login_model.php';

$login = new Login();
$resultLogin = $login->login();

if($resultLogin)
{
    $_SESSION['NICKNAME'] = $resultLogin[0]['nickname'];
    $_SESSION['EMAIL'] = $resultLogin[0]['email'];
    $_SESSION['FOLLOWS'] = $resultLogin[0]['follows'];
    $_SESSION['PICTURE'] = $resultLogin[0]['picture'];
    echo 'success';
} else{
    echo 'error';
}


?>
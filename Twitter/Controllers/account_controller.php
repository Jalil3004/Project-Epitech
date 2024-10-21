<?php 
session_start();
require '../Models/account_model.php';

$account = new Account();
echo $account->accountDisplay();

?>
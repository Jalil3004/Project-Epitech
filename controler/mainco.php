<?php
require("../model/bddco.php");
$data = new MyConnect();
$data->connect_to_db("root","epitech");
$data->connect_user();
?>
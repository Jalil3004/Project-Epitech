<?php
require("../model/bdd.php");
$data = new MyDataBase();
$data->connect_to_db("root","epitech");
echo $data->add_user_to_db();

?>
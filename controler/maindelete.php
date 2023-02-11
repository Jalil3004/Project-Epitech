<?php
require("../model/bdddelete.php");
$data = new MyDelete();
$data->connect_to_db("root","epitech");
$data->delete_user_to_db();

?>
<?php
require("../model/profile.php");
$data = new MyEdit();
$data->connect_to_db("root","epitech");
$data->edit_user_to_db();
?>
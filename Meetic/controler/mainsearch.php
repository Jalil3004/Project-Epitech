<?php
require("../model/bddsearch.php");
$data = new MySearch();
$data->connect_to_db("root","epitech");
$data->search_user_to_db();


?>
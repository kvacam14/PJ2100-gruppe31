<? php

$db_host = "127.0.0.1"; // går til egen maskin
$db_name = "blog";
$db_user = "root";
$db_pass = "";

$database = new PDO ("mysql:host=$db_host;dbname=$db_name", $db_user,
$db_pass);
<?php

include "../config/DB.php";

$connect = new DB;
$count   = $_POST['count'];
$tel     = $_POST['tel'];
$tel     = preg_replace("/[ ()-]/", "", $tel);
$connect->query("INSERT INTO orders VALUES (NULL, $count, $tel)");

?>
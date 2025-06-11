<?php
include_once("conexao.php");

$name;
$description;
$link;


$sql = "SELECT * FROM games ORDER BY id DESC LIMIT 4";
$query = mysqli_query($conn, $sql) or die ("Erro");







?>
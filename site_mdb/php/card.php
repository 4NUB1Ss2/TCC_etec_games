<?php
include_once("conexao.php");

$title;
$description;
$link;
$title2;
$description2;
$link2;
$title3;
$description3;
$link3;
$title3;
$description3;
$link3;


$sql = "SELECT * FROM games ORDER BY id DESC LIMIT 4";
$query = mysqli_query($conn, $sql) or die ("Erro");







?>
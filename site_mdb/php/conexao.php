<?php

  $servername = "localhost";
  $database = "etecgames";
  $username = "root";
  $password = "root";

  //criando conexão
  $conn = new mysqli(	"$servername,$username, $password, $database");

if(!$conn){
    die("Falha na conexão: ".mysqli_connect_error());
}
?>
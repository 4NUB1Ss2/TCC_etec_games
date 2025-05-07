<?php

  $servername = "mysql.db.mdbgo.com";
  $database = "4nub1sss2_tccetecgames";
  $username = "4nub1sss2_tcc";
  $password = "4nUB1S2701=";

  //criando conexão
  $conn = mysqli_connect($servername,$username, $password, $database);

if(!$conn){
    die("Falha na conexão: ".mysqli_connect_error());
}
?>
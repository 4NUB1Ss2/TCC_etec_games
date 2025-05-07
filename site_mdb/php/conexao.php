<?php

  $servername = "mysql.db.mdbgo.com";
  $database = "4nub1sss2_tccetecgames";
  $username = "4nub1sss2_tcc";
  $password = "4nUB1S2701=";

  //criando conexão
  $conn = new mysqli(	"mysql://4nub1sss2_tcc:4nUB1S2701=@mysql.db.mdbgo.com:3306/4nub1sss2_tccetecgames");

if(!$conn){
    die("Falha na conexão: ".mysqli_connect_error());
}
?>
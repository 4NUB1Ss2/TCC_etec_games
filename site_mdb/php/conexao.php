<?php

  $servername = "mysql.db.mdbgo.com";
  $database = "4nub1sss2_tccetecgames";
  $username = "4nub1sss2_tcc";
  $password = "4nUB1S2701=";

  //criando conexão
  $conn = new mysqli(	"postgresql://neondb_owner:npg_puiV3YSCts0D@ep-wild-sunset-ac85wjea-pooler.sa-east-1.aws.neon.tech/neondb?sslmode=require");

if(!$conn){
    die("Falha na conexão: ".mysqli_connect_error());
}
?>
<?php

$servidor = "localhost";
$senha = "root";
$banco = "etecgames";
$usuario = "root";


//criando conexão
$conn = mysqli_connect($servidor,$usuario, $senha, $banco);

if(!$conn){
  die("Falha na conexão: ".mysqli_connect_error());
}
?>
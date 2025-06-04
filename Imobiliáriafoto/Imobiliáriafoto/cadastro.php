<?php

 include_once("conexao.php");
 
 $vnome = $_POST['nome'];
 $vtel = $_POST['fone'];
 $vcont = $_POST['cont'];


 $sql = "INSERT INTO imobiliaria (nome,tel,contato) values('$vnome', '$vtel', '$vcont')";
 $query = mysqli_query($conn, $sql) or die ("Erro");
 
 if (mysqli_affected_rows($conn)){
    echo " <script> window.alert('Imobiliária cadastrada com sucesso') </script>";
	echo " <script> location.href='imobiliaria.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao cadastrar imobiliária') </script>";
	echo " <script> location.href='imobiliaria.html' </script>";
}
 
 ?>
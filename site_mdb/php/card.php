<?php
include_once("conexao.php");

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO users (name,username,email,password) values('$name', '$username', '$email', '$password')";
$query = mysqli_query($conn, $sql) or die ("Erro");

 if (mysqli_affected_rows($conn)){
    echo " <script> window.alert('Cliente cadastrado com sucesso') </script>";
    echo " <script> location.href='../index.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao cadastrar cliente') </script>";
	 echo " <script> location.href='../index.html' </script>";
}

?>
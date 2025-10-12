<?php
include_once("conexao.php");
session_start();
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];





$sql = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);


if ($user) {
    $_SESSION['login'] = $user['email'];
    $_SESSION['senha'] = $user['password'];
    $_SESSION['role'] = $user['role']; // Certifique-se que existe o campo 'role' na tabela
    header('Location: ../mainPage.php');
    exit();
} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    unset($_SESSION['role']);
    $sql2 = "INSERT INTO users (name,username,email,password,role,isgoogle) values('$name', '$username', '$email', '$password', 'user', 1)";
    $query = mysqli_query($conn, $sql2) or die ("Erro");
     if (mysqli_affected_rows($conn)){
        $sql3 = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
        $result2 = mysqli_query($conn, $sql3);
        $user2 = mysqli_fetch_assoc($result2);
        $_SESSION['login'] = $user2['email'];
        $_SESSION['senha'] = $user2['password'];
        $_SESSION['role'] = $user2['role']; // Certifique-se que existe o campo 'role' na tabela
        header('Location: ../mainPage.php');
        exit();
     }
    else{
        echo " <script> window.alert('Erro ao cadastrar cliente') </script>";
         echo " <script> location.href='../index.php' </script>";
    }
}
?>
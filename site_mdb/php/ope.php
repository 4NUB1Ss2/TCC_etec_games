<?php
include_once 'conexao.php'; // Incluindo o arquivo de conexão com o banco de dados
session_start();
require '../vendor/autoload.php'; // Incluindo o autoload do Composer
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];




// as próximas 3 linhas são responsáveis em se conectar com o

//criando conexão

if(!$conn){
    die("Falha na conexão: ".mysqli_connect_error());
}


$isGoogleCheck = "SELECT * FROM users WHERE email='$login' AND isgoogle=1 LIMIT 1";
$check = mysqli_query($conn, $isGoogleCheck);
$checkUser = mysqli_fetch_assoc($check);
if ($checkUser) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    unset($_SESSION['role']);
    unset($_SESSION['id']);
    unset($_SESSION['name']);
    unset($_SESSION['school_id']);
    header('Location: ../login.php?erro2=1');
    exit();
}
else {
    $sql = "SELECT * FROM users WHERE email='$login' AND password='$senha' AND isgoogle=0 LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);


    if ($user) {
        $_SESSION['login'] = $user['email'];
        $_SESSION['senha'] = $user['password'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['school_id'] = $user['school_id']; // Certifique-se que existe o campo 'school_id' na tabela
        header('Location: ../mainPage.php');
        exit();
    } else {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        unset($_SESSION['role']);
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['school_id']);
        header('Location: ../login.php?erro=1');
        exit();
    }
    // Prosseguir com a verificação normal
}




?>
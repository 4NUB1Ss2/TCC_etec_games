<?php
include_once 'conexao.php'; // Incluindo o arquivo de conexão com o banco de dados
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
$id_token = $_POST['id_token'];
$email = $_POST['email'];

// as próximas 3 linhas são responsáveis em se conectar com o

//criando conexão

if(!$conn){
    die("Falha na conexão: ".mysqli_connect_error());
}



if ((empty($login) and empty($senha))){
    $sql = "SELECT * FROM users WHERE email='$email' AND id_token='$id_token' LIMIT 1";

// A variavel $result pega as varias $login e $senha, faz uma
//pesquisa na tabela de usuarios

$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);


if ($user) {
    $_SESSION['email'] = $user['email'];
    $_SESSION['token_id'] = $user['token_id'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['user_id'] = $user['id']; // Certifique-se que existe o campo 'role' na tabela
    header('Location: ../mainPage.php');
    exit();
} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    unset($_SESSION['role']);
    unset($_SESSION['user_id']);
    header('Location: ../login.php?erro=1');
    exit();
}


}
?>

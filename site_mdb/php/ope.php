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
$id_token = $_POST['id_token'];
$email = $_POST['email'];



// as próximas 3 linhas são responsáveis em se conectar com o

//criando conexão

if(!$conn){
    die("Falha na conexão: ".mysqli_connect_error());
}



if ((empty($login) and empty($senha))) {
    $clientID = '842366646662-n4nvpknre73gu9jps7d778btqll4rjos.apps.googleusercontent.com';

    $id_token =  $_POST['credential'] ?? null;

    if ($id_token){
        $client = new Google_Client(['client_id' => $clientID]);
        $payload = $client->verifyIdToken($id_token);
        if ($payload){
            $email = $payload['email'];
            $name = $payload['name'];
            // Verifica se o usuário já existe no banco de dados
            $sql = "SELECT * FROM users WHERE email='$email' and password='testedogooglelogin' LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($result);

            if ($user) {
                // Usuário existe, iniciar sessão
                $_SESSION['email'] = $user['email'];
                $_SESSION['senha'] = $user['senha'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['user_id'] = $user['id']; // Certifique-se que existe o campo 'role' na tabela
                header('Location: ../mainPage.php');
                exit();
            } else {
                // Usuário não existe, redirecionar para página de erro ou cadastro
                $insert_sql = "INSERT INTO users (email, name, role, password) VALUES ('$email', '$name', 'user', 'testedogooglelogin')";
                if (mysqli_query($conn, $insert_sql)) {
                    $_SESSION['email'] = $email;
                    $_SESSION['user_id'] = mysqli_insert_id($conn);
                    $_SESSION['role'] = 'user';
                    header('Location: ../mainPage.php');
            }
           else {
            // Token inválido
            header('Location: ../login.php?erro=4');
            exit();
           }
        }
    }
}
elseif((!empty($login) and !empty($senha))) {
    // A variavel $result pega as varias $login e $senha, faz uma
    // pesquisa na tabela de usuarios
    $sql = "SELECT * FROM users WHERE email='$login' AND senha='$senha' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['senha'] = $user['senha'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['user_id'] = $user['id']; // Certifique-se que existe o campo 'role' na tabela
        header('Location: ../mainPage.php');
        exit();
    } else {
        header('Location: ../login.php?erro=1');
        exit();
    }
} else {
    header('Location: ../login.php?erro=3');
    exit();
}
}
?>
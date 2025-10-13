<?php
include_once("conexao.php");
session_start();
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

if (isset($_POST['addUser'])){
    // Verifica se o email já está cadastrado
    $checkEmail = "SELECT * FROM users WHERE email='$email' OR username='$username'LIMIT 1";
    $result = mysqli_query($conn, $checkEmail);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // Se o usuário já existe
        
        echo " <script> location.href='../addUser.php?exists=1' </script>";
        exit();
    }
    else {
        $sql2  = "INSERT INTO users (name,username,email,password,role,isgoogle) values('$name', '$username', '$email', '$password', '$role', 0)";
        $query2 = mysqli_query($conn, $sql2) or die ("Erro");
        if (mysqli_affected_rows($conn)){
            
            echo " <script> location.href='../manageUsers.php?success=1' </script>";
        }
        else{
            
             echo " <script> location.href='../addUser.php?error=1' </script>";
        }
    }
}
else{
    $checkEmail = "SELECT * FROM users WHERE email='$email' OR username='$username'LIMIT 1";
    $result = mysqli_query($conn, $checkEmail);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // Se o usuário já existe
        echo " <script> location.href='../login.php?exists=1' </script>";
        exit();
    }
    else{
        $sql = "INSERT INTO users (name,username,email,password,role,isgoogle) values('$name', '$username', '$email', '$password', 'user', 0)";
        $query = mysqli_query($conn, $sql) or die ("Erro");

        if (mysqli_affected_rows($conn)){
            $_SESSION['id'] = mysqli_insert_id($conn);
            $_SESSION['login'] = $email;
            $_SESSION['senha'] = $password;
            $_SESSION['role'] = 'user';
            $_SESSION['name'] = $name;
            echo " <script> location.href='../mainPage.php' </script>";
        }
        else{
            echo " <script> location.href='../login.php?erro3=1' </script>";
        }
    }
}
?>
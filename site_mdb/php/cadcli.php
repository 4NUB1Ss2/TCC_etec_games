<?php
require_once("conexao.php");
session_start();
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$school_id = $_POST['school_id'];

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
        $sql2  = "INSERT INTO users (name,username,email,password,role,isgoogle,school_id) values('$name', '$username', '$email', '$password', '$role', 0, '$school_id')";
        $query2 = mysqli_query($conn, $sql2) or die ("Erro");
        if (mysqli_affected_rows($conn)){
            
            echo " <script> location.href='../manageUsers.php?success=1' </script>";
        }
        else{
            
             echo " <script> location.href='../addUser.php?error=1' </script>";
        }
    }
}
else if (isset($_POST['editUser'])){
    // Verifica se o email já está cadastrado
   $usuario_id = $_POST['user_id'];
   $username1 = $_POST['username'];
   $email1 = $_POST['email'];
   $name1 = $_POST['name'];
   $password1 = $_POST['password'];
   $role1 = $_POST['role'];
   $school_id1 = $_POST['school_id'];
   $checkEmail = "SELECT * FROM users WHERE (email='$email1' OR username='$username1') AND id != '$usuario_id' LIMIT 1";
   $result = mysqli_query($conn, $checkEmail);
    $check = mysqli_fetch_assoc($result);
    if ($check) { // Se o usuário já existe
        echo " <script> location.href='../editUser.php?id=$usuario_id&exists=1' </script>";
        exit();
    }else{
        $sql = "UPDATE users SET name='$name1', username='$username1', email='$email1', role='$role1' , school_id='$school_id1'";
        if (!empty($password1)){
            $sql .= ", password='$password1'";
        }
        $sql .= " WHERE id='$usuario_id' LIMIT 1";
        mysqli_query($conn, $sql) or die ("Erro");
        if (mysqli_affected_rows($conn)){
            echo " <script> location.href='../manageUsers.php?success2=1' </script>";
        }
        else{
            echo " <script> location.href='../editUser.php?id=$usuario_id&error=1' </script>";
        }



    }

    
}
else if (isset($_POST['deleteUser'])){
    $usuario_id = $_POST['deleteUser'];
    $sql = "DELETE FROM users WHERE id='$usuario_id' LIMIT 1";
    mysqli_query($conn, $sql) or die ("Erro");
    if (mysqli_affected_rows($conn)){
        echo " <script> location.href='../manageUsers.php?success3=1' </script>";
    }
    else{
        echo " <script> location.href='../manageUsers.php?error3=1' </script>";
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
        $sql = "INSERT INTO users (name,username,email,password,role,isgoogle,school_id) values('$name', '$username', '$email', '$password', 'user', 0, 0)";
        $query = mysqli_query($conn, $sql) or die ("Erro");

        if (mysqli_affected_rows($conn)){
            $_SESSION['id'] = mysqli_insert_id($conn);
            $_SESSION['login'] = $email;
            $_SESSION['senha'] = $password;
            $_SESSION['role'] = 'user';
            $_SESSION['name'] = $name;
            $_SESSION['school_id'] = 0;
            echo " <script> location.href='../mainPage.php' </script>";
        }
        else{
            echo " <script> location.href='../login.php?erro3=1' </script>";
        }
    }
}
?>
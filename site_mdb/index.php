
  <?php
      
      session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header('Location: login.php');
    exit();
}
else {
    $login = $_SESSION['login'];
    $senha = $_SESSION['senha'];
    header('Location: mainPage.php');
  }
$role = $_SESSION['role'] ?? 'user';
include_once("./php/conexao.php");
    ?>
    
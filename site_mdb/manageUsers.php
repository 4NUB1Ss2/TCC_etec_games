<?php 
session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header('Location: login.php');
    exit();
}
$role = $_SESSION['role'] ?? 'user';
$user_id = $_SESSION['id'] ?? null;
require_once("./php/conexao.php");

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    
    
    
    </script>
   
  </head>
  <body class="bg-dark" data-mdb-theme="dark">
    <!-- Start your project here-->
     <!-- Navbar -->
     

<?php include_once("./php/navbar.php"); ?>
<br>
<br><br>
<?php
if (isset($_GET['success'])) {
   echo "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>";
}
?>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4> Lista de Usuários
            <a href="./addUser.php" class="btn btn-primary float-end">Adicionar Usuário</a>
          </h4>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nome de Usuário</th>
                <th>Email</th>
                <th>Função</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM users";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                foreach ($result as $user) {
              ?>
              
              <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['role'] ?></td>
                <td>
                  <a href="" class="btn btn-secondary btn-sm">Visualizar</a>
                  <a href="" class="btn btn-success btn-sm">Editar</a>
                  <form action="" method="POST" class="d-inline">
                    <button type="submit" name="deleteUser" class="btn btn-danger btn-sm">
                      Excluir
                    </button>

                  </form>
                </td>
              </tr>
              <?php
                }
              } else{
                echo "<h5> Nenhum usuário encontrado </h5>";
              }
              ?>
            </tbody>
          </table>        
        </div>
      </div>    
    </div>
  </div>
</div>
<br>
<br><br>

<?php
include_once("./php/footer.php");
?>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
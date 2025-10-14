<?php 
session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header('Location: login.php');
    exit();
}
$role = $_SESSION['role'] ?? 'user';
$user_id = $_SESSION['id'] ?? null;
require_once("./php/conexao.php");



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
if (isset($_GET['exists'])) {
   echo "<div class='alert alert-warning' role='alert'>Usuário ou email já cadastrado!</div>";
}
if (isset($_GET['error'])) {
   echo "<div class='alert alert-danger' role='alert'>Erro ao cadastrar usuário. Tente novamente.</div>";
}
?>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4> Visualizar Usuário
            <a href="./manageUsers.php" class="btn btn-danger float-end">Voltar</a>
          </h4>
        </div>
        <div class="card-body">
          <?php
          if (isset($_GET['id'])){
            $user_id = $_GET['id'];
            $sql = "SELECT * FROM users WHERE id='$user_id'";
            $query = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($query) > 0){
                
                $user = mysqli_fetch_array($query);
          ?>
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <p class="form-control">
                    <?=$user['name'];?>
                    </p>
                </div>
                <div class="mb-3">
                <label class="form-label">Username</label>
                <p class="form-control">
                    <?=$user['username'];?>
                </p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email </label>
                    <p class="form-control">
                        <?=$user['email'];?>
                    </p>
                </div>
                <div class="mb-3">
                <label class="form-label">Função</label>
                <p class="form-control">
                    <?=$user['role'];?>
                </p>
                </div>
            <?php
            } else {
                echo "<h4>Usuário não encontrado</h4>";
            }
        }?>

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
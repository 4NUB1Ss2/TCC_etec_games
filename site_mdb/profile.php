<?php 
session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header('Location: login.php');
    exit();
}
$role = $_SESSION['role'] ?? 'user';
$user_id = $_SESSION['id'] ?? null;
$name = $_SESSION['name'] ?? null;
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
    <style>
        body {
            background-color: #f4f7fa;
        }
        .profile-header {
            height: 300px;
            position: relative;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border: 5px solid white;
            position: absolute;
            bottom: -75px;
            left: 50%;
            transform: translateX(-50%);
        }
        .profile-content {
            margin-top: 90px;
        }
        .stat-card {
            transition: transform 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
    </style>
   
  </head>
  <body class="bg-dark" data-mdb-theme="dark">
    <!-- Start your project here-->
     <!-- Navbar -->
     

<?php include_once("./php/navbar.php"); ?>  

<br>
<br><br>
<div class="profile-header">
        <img src="./php/exibirImage.php?id=1" class="rounded-circle profile-img shadow-4 img-fluid" alt="Foto de Perfil">
    </div>
<div class="container profile-content">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-2"><?=$_SESSION['name']?></h2>
            <p class="text-muted mb-3">Desenvolvedora Full Stack | São Paulo, Brasil</p>
            <button type="button" class="btn btn-primary me-2">
                <i class="fas fa-user-plus me-2"></i>Seguir
            </button>
            <button type="button" class="btn btn-outline-primary">
                <i class="fas fa-envelope me-2"></i>Mensagem
            </button>
        </div>

<div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div class="card stat-card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-project-diagram fa-2x text-primary mb-3"></i>
                        <h3 class="fw-bold">24</h3>
                        <p class="text-muted mb-0">Projetos</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card stat-card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-2x text-success mb-3"></i>
                        <h3 class="fw-bold">1.2k</h3>
                        <p class="text-muted mb-0">Seguidores</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card stat-card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-star fa-2x text-warning mb-3"></i>
                        <h3 class="fw-bold">4.8</h3>
                        <p class="text-muted mb-0">Avaliação</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- About Section -->
            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">
                            <i class="fas fa-user me-2 text-primary"></i>Sobre Mim
                        </h5>
                        <p class="text-muted">
                            Desenvolvedora apaixonada por criar soluções inovadoras e experiências digitais incríveis. 
                            Com 5 anos de experiência em desenvolvimento web, especializada em React, Node.js e design responsivo.
                        </p>
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">
                            <i class="fas fa-code me-2 text-primary"></i>Habilidades
                        </h5>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>JavaScript</span>
                                <span class="text-muted">90%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>React</span>
                                <span class="text-muted">85%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Node.js</span>
                                <span class="text-muted">80%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 80%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between mb-1">
                                <span>UI/UX Design</span>
                                <span class="text-muted">75%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">
                            <i class="fas fa-briefcase me-2 text-primary"></i>Projetos Recentes
                        </h5>
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                            <div class="bg-primary rounded p-3 me-3">
                                <i class="fas fa-laptop-code text-white fa-2x"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">E-commerce Platform</h6>
                                <p class="text-muted mb-0 small">Plataforma completa de vendas online</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                            <div class="bg-success rounded p-3 me-3">
                                <i class="fas fa-mobile-alt text-white fa-2x"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">App Mobile Fitness</h6>
                                <p class="text-muted mb-0 small">Aplicativo para acompanhamento de treinos</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="bg-info rounded p-3 me-3">
                                <i class="fas fa-chart-line text-white fa-2x"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Dashboard Analytics</h6>
                                <p class="text-muted mb-0 small">Painel de análise de dados em tempo real</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">
                            <i class="fas fa-info-circle me-2 text-primary"></i>Informações
                        </h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-map-marker-alt text-muted me-2"></i>
                                <span>São Paulo, Brasil</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope text-muted me-2"></i>
                                <span>maria.silva@email.com</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone text-muted me-2"></i>
                                <span>+55 11 98765-4321</span>
                            </li>
                            <li>
                                <i class="fas fa-calendar text-muted me-2"></i>
                                <span>Membro desde 2020</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">
                            <i class="fas fa-share-alt me-2 text-primary"></i>Redes Sociais
                        </h5>
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-linkedin fa-lg"></i>
                            </button>
                            <button class="btn btn-outline-dark btn-floating">
                                <i class="fab fa-github fa-lg"></i>
                            </button>
                            <button class="btn btn-outline-info btn-floating">
                                <i class="fab fa-twitter fa-lg"></i>
                            </button>
                            <button class="btn btn-outline-danger btn-floating">
                                <i class="fab fa-instagram fa-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include_once("./php/footer.php"); ?>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
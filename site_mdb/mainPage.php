<?php include_once("./php/conexao.php"); 

$sql = "SELECT * FROM games ORDER BY id DESC LIMIT 4";
$query = mysqli_query($conn, $sql) or die ("Erro");
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
<nav class="navbar bg-dark navbar-expand-lg  fixed-top" data-mdb-theme="dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
      <img
        src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
        height="16"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
        <li class="nav-item dropdown">
          <a
            data-mdb-dropdown-init
            class="nav-link dropdown-toggle d-flex align-items-center"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            aria-expanded="false"
          >
            <img
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
              class="rounded-circle"
              height="22"
              alt="Portrait of a Woman"
              loading="lazy"
            />
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </li>
        
        
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->


<br>
<br><br>
<div class="container-lg">
  <h1>Ultimos Lançamentos</h1>
<div class="row">
<?php
$result=mysqli_query($conn,$sql);

while($tbl=mysqli_fetch_array($result))
{
	$link = $tbl["link"];
	$name = $tbl["name"];
	$desc = $tbl["description"];
	$img = $tbl["image"];
	



  echo "<div class='col-sm-3'>";
    echo "<div class='card'>"; 
  echo "<div class='bg-image hover-overlay' data-mdb-ripple-init data-mdb-ripple-color='light'>";
    echo "<img src='https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp' class='img-fluid'/>";
    echo "<a href='#!'>";
     echo "<div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>";
    echo "</a>";
  echo "</div>";
  echo "<div class='card-body'>";
    echo "<h5 class='card-title text-center'> $name</h5>";
    echo "<p class='card-text'> $desc</p>";
    echo "<a href=$link class='btn btn-primary align-items-center' data-mdb-ripple-init>Baixar</a>";
  echo "</div>";
  echo "</div>"; 
  echo "</div>";
}
?>
  
</div>

<br>
<br><br>

<div class="container-lg">
  <h1>Mais Baixados</h1>
<div class="row">
  <div class="col-sm-3">
    <div class="card">
  <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">jogo 1</h5>
    <p class="card-text">Uma breve descrição do jogo, contando a história ou as características do jogo</p>
    <a href="#!" class="btn btn-primary align-items-center" data-mdb-ripple-init>Baixar</a>
  </div>
  </div>  
  </div>

  <div class="col-sm-3">
    <div class="card">
  <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">jogo 2</h5>
    <p class="card-text">Uma breve descrição do jogo, contando a história ou as características do jogo</p>
    <a href="#!" class="btn btn-primary align-items-center" data-mdb-ripple-init>Baixar</a>
  </div>
  </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
  <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">jogo 3</h5>
    <p class="card-text">Uma breve descrição do jogo, contando a história ou as características do jogo</p>
    <a href="#!" class="btn btn-primary align-items-center" data-mdb-ripple-init>Baixar</a>
  </div>
  </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
  <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">jogo 4</h5>
    <p class="card-text">Uma breve descrição do jogo, contando a história ou as características do jogo</p>
    <a href="#!" class="btn btn-primary align-items-center" data-mdb-ripple-init>Baixar</a>
  </div>
  </div>
  </div>
</div>
<br>
<br><br>

<div class="container-lg">
  <h1>Recomendados</h1>
<div class="row">
  <div class="col-sm-3">
    <div class="card">
  <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">jogo 1</h5>
    <p class="card-text">Uma breve descrição do jogo, contando a história ou as características do jogo</p>
    <a href="#!" class="btn btn-primary align-items-center" data-mdb-ripple-init>Baixar</a>
  </div>
  </div>  
  </div>

  <div class="col-sm-3">
    <div class="card">
  <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">jogo 2</h5>
    <p class="card-text">Uma breve descrição do jogo, contando a história ou as características do jogo</p>
    <a href="#!" class="btn btn-primary align-items-center" data-mdb-ripple-init>Baixar</a>
  </div>
  </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
  <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">jogo 3</h5>
    <p class="card-text">Uma breve descrição do jogo, contando a história ou as características do jogo</p>
    <a href="#!" class="btn btn-primary align-items-center" data-mdb-ripple-init>Baixar</a>
  </div>
  </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
  <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">jogo 4</h5>
    <p class="card-text">Uma breve descrição do jogo, contando a história ou as características do jogo</p>
    <a href="#!" class="btn btn-primary align-items-center" data-mdb-ripple-init>Baixar</a>
  </div>
  </div>
  </div>
</div>
<br><br><br><br>
<br> <br>
  
 

  
  
</div>













 

    <footer class=" bg-dark text-center bottom" data-mdb-theme="dark">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
          data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #3b5998;"
            href="#!"
            role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>

          <!-- Twitter -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #55acee;"
            href="#!"
            role="button"
            ><i class="fab fa-twitter"></i
          ></a>

          <!-- Google -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #dd4b39;"
            href="#!"
            role="button"
            ><i class="fab fa-google"></i
          ></a>

          <!-- Instagram -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #ac2bac;"
            href="#!"
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>

          <!-- Linkedin -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #0082ca;"
            href="#!"
            role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <!-- Github -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #333333;"
            href="#!"
            role="button"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2020 Copyright:
        <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>

<!-- salvamento-->

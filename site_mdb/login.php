<?php include_once("./php/conexao.php")?>


<!-- 
842366646662-n4nvpknre73gu9jps7d778btqll4rjos.apps.googleusercontent.com CLIENT id
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 client secret


-->

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
    
    <script src="https://accounts.google.com/gsi/client" async defer></script>
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
        <button data-mdb-ripple-init type="button" class="btn btn-primary me-3" data-mdb-modal-init  data-mdb-target="#ModalLogin">
          LOGIN / SIGN UP
        </button>
        <a
          data-mdb-ripple-init
          class="btn btn-dark px-3"
          href="https://github.com/4NUB1Ss2/TCC_etec_games  "
          role="button"
          ><i class="fab fa-github"></i
        ></a>
        
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->










      <div
        class="modal fade"
        id="ModalLogin"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body p-4">
              <!-- Pills navs -->
              <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link active"
                    id="mdb-tab-login"
                    data-mdb-pill-init
                    href="#pills-login"
                    role="tab"
                    aria-controls="pills-login"
                    aria-selected="true"
                    >Login</a
                  >
                </li>
                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link"
                    id="mdb-tab-register"
                    data-mdb-pill-init
                    href="#pills-register"
                    role="tab"
                    aria-controls="pills-register"
                    aria-selected="false"
                    >SIGN UP</a
                  >
                </li>
              </ul>
              <!-- Pills navs -->

              <!-- Pills content -->
              <div class="tab-content">
                <div
                  class="tab-pane fade show active"
                  id="pills-login"
                  role="tabpanel"
                  aria-labelledby="mdb-tab-login"
                >
                  <form action="./php/ope.php" method="post">
                    <div class="text-center mb-3">
                      <p>Sign in with:</p>
                      <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                        <i class="fab fa-facebook-f"></i>
                      </button>
                      <div class="container mt-5 pt-5 text-center">
                          <h1 class="text-white">Login com Google</h1>
                          <div id="g_id_onload"
                              data-client_id="842366646662-n4nvpknre73gu9jps7d778btqll4rjos.apps.googleusercontent.com"
                              data-login_uri="http://localhost/login.php"
                              data-auto_prompt="false">
                          </div>
                          <div class="g_id_signin"
                              data-type="standard"
                              data-size="large"
                              data-theme="outline"
                              data-text="signin_with"
                              data-shape="rectangular"
                              data-logo_alignment="left">
                          </div>
                        </div>

                      <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                        <i class="fab fa-google"></i>
                      </button>

                      <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                        <i class="fab fa-twitter"></i>
                      </button>

                      <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                        <i class="fab fa-github"></i>
                      </button>
                    </div>

                    <p class="text-center">or:</p>

                    <!-- Email input -->
                    <div class="form-outline mb-4"  data-mdb-input-init>
                      <input type="email" id="loginName" class="form-control" name="login"/>
                      <label class="form-label" for="loginName">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4"  data-mdb-input-init>
                      <input type="password" id="loginPassword" class="form-control" name="senha"/>
                      <label class="form-label" for="loginPassword">Password</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="loginCheck"
                            checked
                          />
                          <label class="form-check-label" for="loginCheck"> Remember me </label>
                        </div>
                      </div>

                      <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4" data-mdb-ripple-init>Sign in</button>

                    <!-- Register buttons -->
                    
                  </form>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-register"
                  role="tabpanel"
                  aria-labelledby="mdb-tab-register"
                >
                  <form action="./php/cadcli.php" method="post">
                    <div class="text-center mb-3">
                      <p>Sign up with:</p>
                      <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                        <i class="fab fa-facebook-f"></i>
                      </button>

                      <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                        <i class="fab fa-google"></i>
                      </button>

                      <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                        <i class="fab fa-twitter"></i>
                      </button>

                      <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                        <i class="fab fa-github"></i>
                      </button>
                    </div>

                    <p class="text-center">or:</p>

                    <!-- Name input -->
                    <div class="form-outline mb-4" data-mdb-input-init>
                      <input type="text" id="registerName" class="form-control" name="name" required/>
                      <label class="form-label" for="registerName">Name</label>
                    </div>

                    <!-- Username input -->
                    <div class="form-outline mb-4" data-mdb-input-init>
                      <input type="text" id="registerUsername" class="form-control" name="username" required/>
                      <label class="form-label" for="registerUsername">Username</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4" data-mdb-input-init>
                      <input type="email" id="registerEmail" class="form-control" name="email" required/>
                      <label class="form-label" for="registerEmail">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4" data-mdb-input-init>
                      <input type="password" id="registerPassword" class="form-control" name="password" required/>
                      <label class="form-label" for="registerPassword">Password</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                      <input
                        class="form-check-input me-2"
                        type="checkbox"
                        value=""
                        id="registerCheck"
                        checked
                        aria-describedby="registerCheckHelpText"
                      />
                      <label class="form-check-label" for="registerCheck">
                        I have read and agree to the terms
                      </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-1" data-mdb-ripple-init>Sign up</button>
                  </form>
                </div>
              </div>
              <!-- Pills content -->
            </div>
          </div>
        </div>
      </div>

      <br>
<br><br>
<div class="container-lg">
  <h1>Ultimos Lançamentos</h1>
<div class="row">
<?php


$recentes = "SELECT * FROM games ORDER BY id DESC LIMIT 4";
$query = mysqli_query($conn, $recentes) or die ("Erro");
$result=mysqli_query($conn,$recentes);

while($tbl=mysqli_fetch_array($result))
{
	
  $id = $tbl["id"];
  $link = $tbl["link"];
	$name = $tbl["name"];
	$desc = $tbl["description"];
	$img = $tbl["image"];
  $clicks = $tbl["clicks"]+1;
	
  
  echo "<div class='col-sm-3'>";
    echo "<div class='card'>"; 
    echo "<form action='./php/card.php' method='post'>";
    echo "<input type='hidden' name='game_id' value='$id'>";
  echo "<div class='bg-image hover-overlay' data-mdb-ripple-init data-mdb-ripple-color='light'>";
    echo "<img src='./php/exibirImage.php?id=$id' class='img-fluid'/>";
    echo "<a href='$link'>";
     echo "<div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>";
    echo "</a>";
  echo "</div>";
  echo "<div class='card-body'>";
    echo "<h5 class='card-title text-center'> $name</h5>";
    echo "<p class='card-text'> $desc</p>";
    
    echo "<button type='submit' class='btn btn-primary align-items-center' data-mdb-ripple-init >Baixar</button>";
  echo "</form>";
    echo "</div>";
  echo "</div>"; 
  echo "</div>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  


}
?>
  
</div>

<br>
<br><br>

<div class="container-lg">
  <h1>Mais Baixados</h1>
<div class="row">
  <?php


$clicados = "SELECT * FROM games ORDER BY clicks DESC LIMIT 4";
$query2 = mysqli_query($conn, $clicados) or die ("Erro");
$result2=mysqli_query($conn,$clicados);

while($tbl2=mysqli_fetch_array($result2))
{
	
  $id = $tbl2["id"];
  $link = $tbl2["link"];
	$name = $tbl2["name"];
	$desc = $tbl2["description"];
	$img = $tbl2["image"];
  $clicks = $tbl2["clicks"]+1;

  echo "<div class='col-sm-3'>";
    echo "<div class='card'>"; 
    echo "<form action='./php/card.php' method='post'>";
    echo "<input type='hidden' name='game_id' value='$id'>";
  echo "<div class='bg-image hover-overlay' data-mdb-ripple-init data-mdb-ripple-color='light'>";
    echo "<img src='./php/exibirImage.php?id=$id' class='img-fluid'/>";
    echo "<a href='$link'>";
     echo "<div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>";
    echo "</a>";
  echo "</div>";
  echo "<div class='card-body'>";
    echo "<h5 class='card-title text-center'> $name</h5>";
    echo "<p class='card-text'> $desc</p>";
    
    echo "<button type='submit' class='btn btn-primary align-items-center' data-mdb-ripple-init>Baixar</button>";
  echo "</form>";
    echo "</div>";
  echo "</div>"; 
  echo "</div>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  


}
?>
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
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="img-fluid"/>
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
    <script type="text/javascript" src="./js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="module" src="./js/script.js"></script>
  </body>
</html>

<?php
require_once 'vendor/autoload.php';

use Google\Client;

$client = new Google\Client();
$client->setClientId('842366646662-n4nvpknre73gu9jps7d778btqll4rjos.apps.googleusercontent.com'); // Substitua pelo seu Client ID

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_token = $_POST['id_token'];

    $payload = $client->verifyIdToken($id_token);
    if ($payload) {
        $userid = $payload['sub'];
        $email = $payload['email'];
        $name = $payload['name'];
        echo "Usuário logado: $name ($email)";
    } else {
        echo "Token inválido.";
    }
}
?>

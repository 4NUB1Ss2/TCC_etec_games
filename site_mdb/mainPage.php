<?php 
session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header('Location: login.php');
    exit();
}
$role = $_SESSION['role'] ?? 'user';
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
<div class="container-lg">
  <h1>Ultimos Lançamentos</h1>
  <hr class="hr" />
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
  <h1>Mais Baixados</h1>
  <hr class="hr" />
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
  <hr class="hr" />
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
<?php include_once("./php/footer.php"); ?>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>

<!-- salvamento-->

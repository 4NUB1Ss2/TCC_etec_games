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
<div class="container-lg">
  <h1>Seus Jogos</h1>
  <hr class="hr hr-blurry" />
<div class="row">
<?php


$recentes = "SELECT * FROM games WHERE user_id = $user_id ORDER BY id DESC LIMIT 4";
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
	
  ?>
  <div class='col-sm-3'>
    <div class='card'> 
    <form action='./php/card.php' method='post'>
    <input type='hidden' name='game_id' value='<?=$id?>'>
  <div class='bg-image hover-overlay' data-mdb-ripple-init data-mdb-ripple-color='light'>
    <img src='./php/exibirImage.php?id=<?=$id?>' class='img-fluid'/>
    <a href='<?=$link?>'>
     <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
    </a>
  </div>
  <div class='card-body'>
    <h5 class='card-title text-center'> <?=$name?></h5>
    <p class='card-text'> <?=$desc?></p>
    
    <button type='button' class='btn btn-primary align-items-center' data-mdb-ripple-init data-mdb-modal-init data-mdb-target='#modal<?=$id?>'>Editar</button>
  </form>
    </div>
  </div> 
  </div>
  <br>
  <br>
  <br>
  
   
  <div class='modal top fade' id='modal<?=$id?>' tabindex='-1' aria-labelledby='modalLabel$id' aria-hidden='true' data-mdb-backdrop='static' data-mdb-keyboard='true'>
    <div class="modal-dialog modal-xl ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class='modal-body'>
        <div class=" img-fluid hover-overlay ripple">
        <img src='./php/exibirImage.php?id=<?=$id?>' />
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);"></div>
       </div>
        
          <div class="form-outline" data-mdb-input-init>
          <input type='text' value='<?=$name?>' id='form12' class='form-control' />
          <label class="form-label" for="form12">Nome do Jogo</label>
          </div>
        </div>
        <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"></button>
            Close
          </button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
   </div>

 
<?php
}
?>


<!-- Modal -->
<div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
  <div class="modal-dialog modal-xl ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">...</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary">Save changes</button>
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

<!-- salvamento-->

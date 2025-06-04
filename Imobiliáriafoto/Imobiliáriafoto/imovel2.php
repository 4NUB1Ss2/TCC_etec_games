<?php
include("conexao.php");

$sql="Select * from imobiliaria";
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	    <link rel="stylesheet" href="modelo.css">
		<title>CADASTRO DE IMÓVEIS</title>
	</head>
	
	<body>
	 <div class="titulo">	
		<a href="imobiliaria.html"> Principal</a> 
		
		 <form action="editarimovel.php" method="post">
			<input type="text" placeholder="Código do imóvel" name="pesquisa" required>
			<button class="botao_pesquisa" type="submit">Localizar Imóvel </button>
		</form>
	</div>
		
		<div class="corpo">
			<form action="cadastroimovel.php" method="post" enctype="multipart/form-data">
				
				<label><b>Imobiliária</b></label><br>
				<select id="imob" class="combo" name="imob"> <option>Selecione a imobiliária</option><br>
					<?php 
					    $result=mysqli_query($conn,$sql);

						while($tbl=mysqli_fetch_array($result))	{ ?>
						<option value="<?php echo $tbl['codigo']; ?>">
							           <?php echo $tbl['nome']; ?>
						</option>
					<?php } ?>
				</select> <br><br>
				
			    <!--	<label><b>Código do imobiliária</b></label><br>
				<input type="text" class="texto" name="codimob" required><br>  -->
						
				<label><b>Tipo</b></label><br>
				<input type="text" class="texto" name="tipo" required><br>
				
				<label><b>Valor</b></label><br>
				<input type="text" class="texto" name="val" required><br>
				
				<label><b>Bairro</b></label><br>
				<input type="text" class="texto" name="bairro" required><br>
				
				<label><b>Descrição</b></label><br>
				<input type="text" class="texto" name="desc" required><br>
				
				<label><b>Situação</b></label><br>
				<input type="text" class="texto" name="sit" required><br>
				
				<label><b>Imagem </b></label> <br>
				<br><input type="file" class = "foto" name="imagem" id="imagem" onchange="mostraimagem()"><br><br>
				
				<!-- <img style="margin-left: 350px; width: 300px; height: 150px; border-style: none;"><br><br> -->
				
				<img style="margin-left: 350px;"><br><br>
			
				<button type="submit" class="botao">Gravar</button>	<br>
			</form>
			
		<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

			<script>
				function mostraimagem(){
				  var vimagem = document.querySelector('input[name=imagem]').files[0];
				  var vmostrar = document.querySelector('img');

				  var vaux = new FileReader();

				  vaux.onloadend = function(){
					 vmostrar.src = vaux.result;
				  }
				 
				  if(vimagem){
					  vaux.readAsDataURL(vimagem);	
				  } else {
					 vmostrar.src = "";
					}
				 }
			</script>
			
			
			<form action="listaimobiliaria.php" method="post">
				<button class="botao_pesquisa" type="submit">Listar Imobiliárias </button>
			</form>
		</div>
	</body>
</html>
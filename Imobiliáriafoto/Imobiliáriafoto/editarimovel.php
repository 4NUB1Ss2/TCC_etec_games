<?php
include("conexao.php");

$imob = $_POST['pesquisa'];
$sql = "Select * from imovel where Codigo = $imob";
$query = mysqli_query($conn, $sql) or die ("Erro");
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="modelo.css">
		<title>Formulário Imobiliária</title>
	</head>
	
	<body>
		<div class="titulo">
			<a href="imovel2.php"> Home</a> 
        </div>
		
		<div class="corpo">
			<form action="alterarimovel.php" method="post" enctype="multipart/form-data">
			
			    <?php while($linha = mysqli_fetch_assoc($query)){?> 
				
				<label><b>Código imóvel</b></label><br>
				<input type="text" class="texto" value="<?php echo $linha['Codigo']?>" name="codigoimovel"><br>
				
				<label><b>Código da imobiliária</b></label><br>
				<input type="text" class="texto" value="<?php echo $linha['codimob']?>" name="codimob"><br>
				
				<label><b>Tipo</b></label><br>
				<input type="text" class="texto" value="<?php echo $linha['Tipo']?>" name="tipo"><br>
				
				<label><b>Valor</b></label><br>
				<input type="text" class="texto" value="<?php echo $linha['Valor']?>" name="val"><br>
				
				<label><b>Bairro</b></label><br>
				<input type="text" class="texto" value="<?php echo $linha['Bairro']?>" name="bairro"><br>
				
				<label><b>Descrição</b></label><br>
				<input type="text" class="texto" value="<?php echo $linha['Descricao']?>" name="desc"><br>
				
				<label><b>Situação</b></label><br>
				<input type="text" class="texto" value="<?php echo $linha['Situacao']?>" name="sit"><br>
				
				<label><b>Imagem </b></label> <br>
				
				<?php
				    $image=base64_encode($linha['foto']);
			
				   // Format the image SRC:  data:base64,{data};
				   $src = 'data: ' . ';base64,' . $image;

				   // Echo out a sample image
				   echo '<img src="' . $src . '"; style="margin-left: 350px; width: 300px; height: 150px;">';
			    ?>
				
				<br><input type="file" class = "foto" name="imagem" id="imagem"  onchange="mostraimagem()"><br><br>	
				
				<img style="margin-left: 350px;"><br><br>	
				
			    <button type="submit" name="botao" class="botao" id="botao">Alterar Imovel</button>
				
				<br><br>
				<script>
				   <!--document.getElementById("botao").disabled = true;  -->
				</script>
			</form>
			
			<script>
				function mostraimagem(){
					
				 // document.getElementById("botao").disabled = false;
				
				 
				  var vimagem = document.querySelector('input[name=imagem]').files[0];
				  
				  
				  var vmostrar = document.querySelector('img');

				  var vaux = new FileReader();

				  vaux.onloadend = function(){
					vmostrar.src = vaux.result;
					//vmostrar.src ='casa2.jpg';
					
				  }
				 
				  if(vimagem){
					  vaux.readAsDataURL(vimagem);	
				  } else {
					 vmostrar.src = "";
					}
				 }
				 
			</script>
					
			<form action="" method="post">
				<button type="submit" class="botao">Excluir Contato</button>
			</form>	
		</div>
		
		<?php }?>
	</body>
</html>
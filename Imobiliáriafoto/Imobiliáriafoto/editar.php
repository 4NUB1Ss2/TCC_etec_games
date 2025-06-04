<?php
include("conexao.php");

$imob = $_POST['pesquisa'];
$sql = "Select * from imobiliaria where nome like '%$imob%'" ;
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
			<a href="imobiliaria.html"> Home</a> 
        </div>
		
		<div class="corpo">
			<form action="" method="post">
			
			    <?php while($linha = mysqli_fetch_assoc($query)){?> 
				
				<label><b>Código</b></label><br>
				<input type="text" class="texto" value="<?php echo $linha['codigo']?>" name="Codigo"><br>
				
				<label><b>Nome</b></label><br>
				<input type="text" class="texto" value="<?php echo $linha['nome']?>" name="Nome"><br>
				
				<label><b>Telefone</b></label><br>
				<input type="text" class="texto" value="<?php echo $linha['tel']?>" name="telefone"><br>
				
				<label><b>Contato</b></label><br>
				<input type="text" class="texto" value="<?php echo $linha['contato']?>" name="contato"><br>
				
				
				<button type="submit" class="botao">Salvar Contato</button>
			</form>
			
			
			<form action="" method="post">
				<button type="submit" class="botao">Excluir Contato</button>
			</form>	
		</div>
		
		<?php }?>
	</body>
</html>
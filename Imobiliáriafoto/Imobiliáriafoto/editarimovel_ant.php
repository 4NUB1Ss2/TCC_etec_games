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
			<a href="imovel.html"> Home</a> 
        </div>
		
		<div class="corpo">
			<form action="" method="post">
			
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
				
				
				<button type="submit" class="botao">Salvar Contato</button>
			</form>
			
			
			<form action="" method="post">
				<button type="submit" class="botao">Excluir Contato</button>
			</form>	
		</div>
		
		<?php }?>
	</body>
</html>
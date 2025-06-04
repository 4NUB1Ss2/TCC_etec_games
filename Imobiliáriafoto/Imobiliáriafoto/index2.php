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
			<!--<form action="cadastroimovel.php" method="post" enctype="multipart/form-data">-->
			<form action='pegavalor.php' method='POST'>
				
				<label><b>Código do imobiliária</b></label><br>
		
				 <select id="imob" name="imob"> <option>Selecione...</option>
					<?php 
					
					    $result=mysqli_query($conn,$sql);

						while($tbl=mysqli_fetch_array($result))	{ ?>
						<option value="<?php echo $tbl['codigo']; ?>">
							<?php echo $tbl['nome']; ?>
							<?php // echo $tbl['nome']; echo ' - '; echo $tbl['codigo']; ?> 
						</option>
					<?php } ?>
				</select>
		
				<button type="submit" class="botao">Enviar</button>
				
			</form>
			
			
		</div>
	</body>
</html>
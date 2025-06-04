<?php
    include("conexao.php");
	
	$cod1 = $_POST['codigoimovel'];
	$vtipo = $_POST['tipo'];
	$vval = $_POST['val'];
	$vbairro = $_POST['bairro'];
	$vdesc = $_POST['desc'];
	$vsit = $_POST['sit']; 
	$vcodimob = $_POST['codimob'];
	
	if ($_FILES['imagem']['name'] == '') {
		
		$sql = "UPDATE imovel set codimob = '$vcodimob', Tipo = '$vtipo', Valor = '$vval', Bairro = '$vbairro', Descricao = '$vdesc', Situacao = '$vsit'   WHERE Codigo = '$cod1'";
		$query = mysqli_query($conn, $sql) or die ("Erro");

		if (mysqli_affected_rows($conn)){		
			echo " <script> window.alert('Imóvel alterado com sucesso') </script>";
			echo " <script> location.href='imovel2.php' </script>";
		}
		else{
			echo " <script> window.alert('Erro ao alterar imóvel') </script>";
			echo " <script> location.href='Imovel2.php' </script>";	
		}
	}else{
		$imagem = $_FILES['imagem'];
		
		$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal);

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
		
		$sql = "UPDATE imovel set codimob = '$vcodimob', Tipo = '$vtipo', Valor = '$vval', Bairro = '$vbairro', Descricao = '$vdesc', foto = '$mysqlImg', Situacao = '$vsit'   WHERE Codigo = '$cod1'";
		$query = mysqli_query($conn, $sql) or die ("Erro");

		if (mysqli_affected_rows($conn)){		
			echo " <script> window.alert('Imóvel alterado com sucesso') </script>";
			echo " <script> location.href='imovel2.php' </script>";
		}
		else{
			echo " <script> window.alert('Erro ao alterar imóvel') </script>";
			echo " <script> location.href='Imovel2.php' </script>";	
		}
		unlink($nomeFinal);
	}
	}
?>
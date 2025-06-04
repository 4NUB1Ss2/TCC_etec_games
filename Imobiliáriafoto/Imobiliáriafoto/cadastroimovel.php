<?php

include("conexao.php");

$imagem = $_FILES["imagem"];
$vtipo = $_POST['tipo'];
$vval = $_POST['val'];
$vbairro = $_POST['bairro'];
$vdesc = $_POST['desc'];
$vsit = $_POST['sit']; 

$vcodimob = $_POST['imob'];
 
//echo $cliente;

if($imagem != NULL) {
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal);

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
		
		$sql =("INSERT INTO imovel (codimob,Tipo,Valor,Bairro,Descricao,foto,Situacao) values ('$vcodimob','$vtipo','$vval','$vbairro','$vdesc','$mysqlImg','$vsit')");
		
		$query = mysqli_query($conn, $sql) or die ("Erro");

		if (mysqli_affected_rows($conn)){
			
			echo " <script> window.alert('imagem cadastrada com sucesso') </script>";
			echo " <script> location.href='imovel2.php' </script>";
		}
		else{
			echo " <script> window.alert('Erro ao cadastrar imagem') </script>";
		}

		unlink($nomeFinal);

	}
}

 ?>
 

<?php
include("conexao.php");

$sql="Select * from imobiliaria";
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Lista Imobiliárias</title>
</head>

<body>
        <div class="navbar">
			<a href="imobiliaria.html"> Home </a> 
        </div>   
			
 
       <br><br>



<table class="minimalistBlack">
<thead>
<tr>
<td><b>Código: </b></td>
<td><b>Nome:</b></td>
<td><b>Telefone:</b></td>
<td><b>Contato:</b></td>
</tr>
</thead>


<?php
$result=mysqli_query($conn,$sql);

while($tbl=mysqli_fetch_array($result))
{
	$cod = $tbl["codigo"];
	$nome = $tbl["nome"];
	$tel = $tbl["tel"];
	$cont = $tbl["contato"];
	

	echo "<tr>";
	echo "<td>$cod</td>";
	echo "<td>$nome</td>";
	echo "<td>$tel</td>";
	echo "<td>$cont</td>";
	echo "</tr>";
}
?>
</table>

</body>
</html>
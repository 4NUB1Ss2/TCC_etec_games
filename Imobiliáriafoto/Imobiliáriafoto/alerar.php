<?php
  include("conexao.php");

  $cod = $_POST['Codigo'];
  $nome = $_POST['Nome'];
  $sexo = $_POST['Sexo'];
  $ddd = $_POST['DDD'];
  $celular = $_POST['Cel'];
  $cidade = $_POST['Cid'];

  $sql = "UPDATE contatos set nome = '$nome', sexo = '$sexo', ddd = '$ddd', celular = '$celular', cidade = '$cidade' WHERE codigo = '$cod' ";
  $query = mysqli_query($conn, $sql) or die ("Erro");

  if (mysqli_affected_rows($conn)){
   // echo " <script> window.alert('Contato Editado') </script>";
    echo " <script> location.href='Index.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao editar contato') </script>";
    echo " <script> location.href='Index.html' </script>";	
}
?>
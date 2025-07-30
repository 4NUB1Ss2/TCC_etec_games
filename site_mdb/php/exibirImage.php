<?php
include_once("conexao.php");

$id = intval($_GET['id']);
$sql = "SELECT image FROM games WHERE id = $id LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    header("Content-Type: image/jpeg"); // Ex: image/jpeg
    ob_clean();
    flush();
    echo $row['image'];
    
} else {
    // Imagem padrão caso não encontre
    header("Content-Type: image/webp");
    ob_clean();
    flush();
    readfile("../imagem.webp");
}
?>
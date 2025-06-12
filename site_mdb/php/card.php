<?php

include_once("conexao.php");

if (isset($_POST['game_id'])) {
    $id = intval($_POST['game_id']);
    // Incrementa o contador
    $update = "UPDATE games SET clicks = clicks + 1 WHERE id = $id";
    mysqli_query($conn, $update);

    // Busca o link do jogo
    $result = mysqli_query($conn, "SELECT link FROM games WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    $link = $row['link'];

    // Redireciona para o link do jogo
    header("Location: $link");
    exit();
} else {
    // Se não houver ID, volta para a página principal
    header("Location: ../mainPage.php");
    exit();
}
?>

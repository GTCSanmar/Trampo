<?php
// Conectar ao banco de dados
require_once('../BD/databaseconnect.php');



// Obter o ID do produto a ser excluído
$id = $_GET['id'];

// Excluir o produto da tabela
$sql = "DELETE FROM tb_produto WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Produto excluído com sucesso!";
} else {
    echo "Erro ao excluir produto: " . $conn->error;
}

// Fechar a conexão com o banco de dados
//$conn->close();
?>
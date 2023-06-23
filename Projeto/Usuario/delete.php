<?php
// Conectar ao banco de dados
require_once('../BD/databaseconnect.php');



// Obter o ID do usuário
$id = $_GET['id'];

// Deletar o usuário da tabela
$sql = "DELETE FROM tb_usuario WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Usuário excluído com sucesso!";
} else {
    echo "Erro ao excluir usuário: " . $conn->error;
}

// Fechar a conexão com o banco de dados
//$conn->close();
?>
<?php
// Conectar ao banco de dados
require_once('../BD/databaseconnect.php');



// Obter os valores enviados pelo formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

// Atualizar os dados na tabela produto
$sql = "UPDATE tb_produto SET nome='$nome', descricao='$descricao', preco='$preco', quantidade='$quantidade' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Produto atualizado com sucesso!";
} else {
    echo "Erro ao atualizar produto: " . $conn->error;
}

// Fechar a conexão com o banco de dados
//$conn->close();
?>
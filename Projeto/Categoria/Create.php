<?php
// Conectar ao banco de dados
require_once('../BD/databaseconnect.php');



// Obter os valores enviados pelo formulário
$id_categoria = $_POST['id_categoria'];

// Inserir a categoria na tabela
$sql = "INSERT INTO tb_categoria (id_categoria) VALUES ('$id_categoria')";

if ($conn->query($sql) === TRUE) {
    echo "Categoria inserida com sucesso!";
} else {
    echo "Erro ao inserir a categoria: " . $conn->error;
}

// Fechar a conexão com o banco de dados
//$conn->close();
?>
<?php
// Conectar ao banco de dados
require_once('../BD/databaseconnect.php');

// Obter os valores enviados pelo formulário
$id_usuario = $_POST['id_usuario'];
$valor = $_POST['valor'];
$data = $_POST['data'];

// Inserir a compra na tabela
$sql = "INSERT INTO tb_compra (id_usuario, valor, data) VALUES ('$id_usuario', '$valor', '$data')";

if ($conn->query($sql) === TRUE) {
    echo "Compra realizada com sucesso!";
} else {
    echo "Erro ao realizar compra: " . $conn->error;
}

// Fechar a conexão com o banco de dados
//$conn->close();
?>
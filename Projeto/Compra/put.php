<?php
// Conectar ao banco de dados
require_once('../BD/databaseconnect.php');



// Obter os valores enviados pelo formulário
$id_compra = $_POST['id_compra'];
$valor = $_POST['valor'];
$data = $_POST['data'];

// Atualizar os dados na tabela compra
$sql = "UPDATE compra SET valor='$valor', data='$data' WHERE id='$id_compra'";

if ($conn->query($sql) === TRUE) {
    echo "Compra atualizada com sucesso!";
} else {
    echo "Erro ao atualizar compra: " . $conn->error;
}

// Fechar a conexão com o banco de dados
//$conn->close();
?>
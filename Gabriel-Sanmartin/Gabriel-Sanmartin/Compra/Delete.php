<?php
// Conectar ao banco de dados
$servername = "host";
$username = "admin";
$password = "123";
$dbname = "branco";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obter o ID da compra a ser excluída
$id_compra = $_GET['id_compra'];

// Excluir a compra da tabela
$sql = "DELETE FROM tb_compra WHERE id='$id_compra'";

if ($conn->query($sql) === TRUE) {
    echo "Compra excluída com sucesso!";
} else {
    echo "Erro ao excluir compra: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
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
$id_categoria = $_GET['id_categoria'];

// Excluir a compra da tabela
$sql = "DELETE FROM tb_categoria WHERE id='$id_categoria'";

if ($conn->query($sql) === TRUE) {
    echo "Categoria excluída com sucesso!";
} else {
    echo "Erro ao excluir categoria: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
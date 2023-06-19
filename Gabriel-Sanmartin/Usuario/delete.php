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
$conn->close();
?>
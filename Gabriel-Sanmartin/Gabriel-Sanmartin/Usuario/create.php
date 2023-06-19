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

// Obter os valores enviados pelo formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];
$admin = isset($_POST['admin']) ? 1 : 0;

// Inserir os dados na tabela usuário
$sql = "INSERT INTO tb_usuario (nome, email, senha, nascimento, admin)
        VALUES ('$nome', '$email', '$senha', '$nascimento', '$admin')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário criado com sucesso!";
} else {
    echo "Erro ao criar usuário: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
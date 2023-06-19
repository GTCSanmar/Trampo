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
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];
$admin = isset($_POST['admin']) ? 1 : 0;

// Atualizar os dados na tabela usuário
$sql = "UPDATE tb_usuario SET nome='$nome', email='$email', senha='$senha', nascimento='$nascimento', admin='$admin' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Usuário atualizado com sucesso!";
} else {
    echo "Erro ao atualizar usuário: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
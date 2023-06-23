<?php

// Conectar ao banco de dados
require_once('../BD/databaseconnect.php');

// Obter o ID para inserção no banco (Se não for isso, muda ai kk, só não pode deixar vazio)
$id = $conn->query("SELECT COUNT(*) FROM tb_usuario")->fetch_column();

// Obter os valores enviados pelo formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];
$admin = isset($_POST['admin']) ? 1 : 0;

// Inserir os dados na tabela usuário
$sql = "INSERT INTO tb_usuario (Id, nome, email, senha, nascimento, admin)
        VALUES ('$id', '$nome', '$email', '$senha', '$nascimento', '$admin')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário criado com sucesso!";
} else {
    echo "Erro ao criar usuário: " . $conn->error;
}

// Fechar a conexão com o banco de dados
//$conn->close();
?>
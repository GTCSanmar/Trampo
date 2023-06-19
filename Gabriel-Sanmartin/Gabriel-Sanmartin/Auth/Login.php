<?php
require_once 'vendor/autoload.php';

use \Firebase\JWT\JWT;
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

// Obter as credenciais fornecidas pelo usuário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Verificar as credenciais no banco de dados
$sql = "SELECT * FROM tb_usuario WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Autenticação bem-sucedida

    // Importar a biblioteca Firebase\JWT


    // Definir a chave secreta para assinar o token
    $secretKey = 'sua_chave_secreta';

    // Obter os dados do usuário
    $row = $result->fetch_assoc();
    $idUsuario = $row['id'];
    $nomeUsuario = $row['nome'];

    // Definir os dados do payload do token
    $payload = [
        'idUsuario' => $idUsuario,
        'nomeUsuario' => $nomeUsuario
    ];

    // Gerar o token JWT
    $token = JWT::encode($payload, $secretKey);

    // Exibir o token para o usuário
    echo "Token de autenticação: " . $token;
} else {
    // Autenticação falhou
    echo "Credenciais inválidas.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
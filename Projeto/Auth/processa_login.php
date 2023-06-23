<?php

require_once 'vendor/autoload.php';
// Conectar ao banco de dados
require_once('../BD/databaseconnect.php');

use \Firebase\JWT\JWT;

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
    //echo 'Token de autenticação: ' . $token;
    header( 'location:../Usuario/perfil_usuario.php' );
    echo "<script>alert('Token de autenticação: ' . $token)</script>";
    exit();

} else {
    // Autenticação falhou
    //echo "Credenciais inválidas.";
    header( 'location:login.php?invalid=true' );
    exit();
}

// Fechar a conexão com o banco de dados
//$conn->close();
?>
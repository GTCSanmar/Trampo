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
$conn->close();
?>
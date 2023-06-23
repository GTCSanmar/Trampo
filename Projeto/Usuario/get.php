<?php
// Conectar ao banco de dados
require_once('../BD/databaseconnect.php');

// Obter o ID do usuário (se fornecido)
$id = $_GET['id'];

// Montar a consulta SQL
$sql = "SELECT * FROM tb_usuario";
if (!empty($id)) {
    $sql .= " WHERE id = $id";
}

// Executar a consulta
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir os usuários
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nome: " . $row["nome"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Senha: " . $row["senha"] . "<br>";
        echo "Nascimento: " . $row["nascimento"] . "<br>";
        echo "Admin: " . ($row["admin"] ? "Sim" : "Não") . "<br><br>";
    }
} else {
    echo "Nenhum usuário encontrado.";
}

// Fechar a conexão com o banco de dados
//$conn->close();
?>
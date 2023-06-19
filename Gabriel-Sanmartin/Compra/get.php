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

// Obter o ID do usuário (se fornecido)
$id_usuario = $_GET['id_usuario'];
$id_compra = $_GET['id_compra'];

// Montar a consulta SQL
$sql = "SELECT * FROM tb_compra";
if (!empty($id_usuario)) {
    $sql .= " WHERE id_usuario = $id_usuario";
} elseif (!empty($id_compra)) {
    $sql .= " WHERE id = $id_compra";
}

// Executar a consulta
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir as compras
    while ($row = $result->fetch_assoc()) {
        echo "ID da Compra: " . $row["id"] . "<br>";
        echo "ID do Usuário: " . $row["id_usuario"] . "<br>";
        echo "Valor: " . $row["valor"] . "<br>";
        echo "Data: " . $row["data"] . "<br><br>";
    }
} else {
    echo "Nenhuma compra encontrada.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
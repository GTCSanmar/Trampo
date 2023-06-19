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

// Obter o ID do produto (se fornecido)
$id = $_GET['id'];
$categoria = $_GET['categoria'];

// Montar a consulta SQL
$sql = "SELECT * FROM tb_produto";
if (!empty($id)) {
    $sql .= " WHERE id = $id";
} elseif (!empty($categoria)) {
    $sql .= " WHERE categoria = '$categoria'";
}

// Executar a consulta
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir os produtos
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nome: " . $row["nome"] . "<br>";
        echo "Descrição: " . $row["descricao"] . "<br>";
        echo "Preço: R$" . $row["preco"] . "<br>";
        echo "Quantidade: " . $row["quantidade"] . "<br><br>";
    }
} else {
    echo "Nenhum produto encontrado.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
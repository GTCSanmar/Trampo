<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "admin";
$password = "123";
$dbname = "branco";

$conn = new mysqli($servername, $username, $password, $dbname);



// Obter os valores enviados pelo formulário
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

// Inserir os dados na tabela produto
$sql = "INSERT INTO tb_produto (nome, descricao, preco, quantidade)
        VALUES ('$nome', '$descricao', '$preco', '$quantidade')";

if ($conn->query($sql) === TRUE) {
    echo "Produto criado com sucesso!";
} else {
    echo "Erro ao criar produto: " . $conn->error;
}

// Fechar a conexão com o banco de dados
//$conn->close();
?>
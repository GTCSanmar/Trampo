<?php
// get.php

// Verificar se a requisição é do tipo GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Conectar ao banco de dados
  $conn = new mysqli("localhost", "username", "password", "database_name");
  $servername = "host";
  $username = "admin";
  $password = "123";
  $dbname = "branco";
  
  // Verificar se a conexão foi estabelecida com sucesso
  if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
  }

  // Verificar se foi fornecido um ID específico para buscar uma categoria
  if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    // Preparar e executar a consulta SQL para obter a categoria pelo ID
    $stmt = $conn->prepare("SELECT * FROM tb_categoria WHERE Id = ?");
    $stmt->bind_param("i", $categoryId);
    $stmt->execute();
    $result = $stmt->get_result();
    $category = $result->fetch_assoc();

    // Verificar se a categoria foi encontrada
    if ($category) {
      // Enviar a resposta em formato JSON
      header('Content-Type: application/json');
      echo json_encode($category);
    } else {
      // Categoria não encontrada
      echo "Categoria não encontrada.";
    }

    // Fechar a conexão com o banco de dados
    $stmt->close();
  } else {
    // Nenhum ID fornecido, obter todas as categorias
    $result = $conn->query("SELECT * FROM tb_categoria");

    // Verificar se há categorias encontradas
    if ($result->num_rows > 0) {
      // Extrair todas as categorias em um array
      $categories = array();
      while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
      }

      // Enviar a resposta em formato JSON
      header('Content-Type: application/json');
      echo json_encode($categories);
    } else {
      // Nenhuma categoria encontrada
      echo "Nenhuma categoria encontrada.";
    }
  }

  // Fechar a conexão com o banco de dados
  $conn->close();
} else {
  // Método de requisição inválido
  echo "Método inválido. Utilize o método GET para obter categorias.";
}
?>

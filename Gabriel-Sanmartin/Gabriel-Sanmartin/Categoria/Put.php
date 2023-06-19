<?php
// put.php
$servername = "host";
$username = "admin";
$password = "123";
$dbname = "branco";
// Verificar se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recuperar os dados enviados no corpo da requisição
  $data = json_decode(file_get_contents('php://input'), true);

  // Verificar se os dados necessários foram enviados
  if (isset($data['Id']) && isset($data['Nome'])) {
    // Conectar ao banco de dados
    $conn = new mysqli("localhost", "username", "password", "database_name");

    // Verificar se a conexão foi estabelecida com sucesso
    if ($conn->connect_error) {
      die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Preparar e executar a consulta SQL para atualizar a categoria
    $stmt = $conn->prepare("UPDATE tb_categoria SET Nome = ? WHERE Id = ?");
    $stmt->bind_param("si", $data['Nome'], $data['Id']);

    if ($stmt->execute()) {
      // A categoria foi atualizada com sucesso
      echo "Categoria atualizada com sucesso.";
    } else {
      // Ocorreu um erro ao atualizar a categoria
      echo "Erro ao atualizar categoria: " . $stmt->error;
    }

    // Fechar a conexão com o banco de dados
    $stmt->close();
    $conn->close();
  } else {
    // Dados incompletos
    echo "Dados incompletos. Certifique-se de fornecer o ID e o nome da categoria.";
  }
} else {
  // Método de requisição inválido
  echo "Método inválido. Utilize o método POST para atualizar uma categoria.";
}
?>

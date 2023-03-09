<?php
require "../../config/db_config.php";

// Validação dos dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($name) || empty($email) || empty($password)) {
  echo 'Todos os campos são obrigatórios.';
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo 'Endereço de email inválido.';
  exit;
}

// Criptografia da senha
$password_cript = password_hash($password, PASSWORD_DEFAULT);

// Inserção do novo usuário na tabela
$sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$resultado = $stmt->execute([$name, $email, $password_cript]);

if ($resultado) {
  echo 'Usuário registrado com sucesso.';
} else {
  echo 'Erro ao registrar usuário.';
}

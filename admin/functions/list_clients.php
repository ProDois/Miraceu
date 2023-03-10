<?php
function obterProducts()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM products");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

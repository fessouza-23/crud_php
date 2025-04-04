<?php
require_once('config/db.php');

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

if ($nome && $email) {
    $stmt = $pdo->prepare("INSERT INTO users (nome, email) VALUES (?, ?)");
    $stmt->execute([$nome, $email]);
}

header('Location: index.php');
exit;

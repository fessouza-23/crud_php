<?php
require_once('config/db.php');

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$obs = $_POST['obs'] ?? '';

if ($nome && $email) {
    $stmt = $pdo->prepare("INSERT INTO users (nome, email, obs) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $email, $obs]);
}

header('Location: index.php');
exit;

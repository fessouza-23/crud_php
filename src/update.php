<?php
require_once('config/db.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$obs = $_POST['obs'];

$stmt = $pdo->prepare("UPDATE users SET nome = ?, email = ?, obs = ? WHERE id = ?");
$stmt->execute([$nome, $email, $obs, $id]);

header('Location: index.php');
exit;

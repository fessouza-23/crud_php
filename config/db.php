<?php

$host = 'localhost';
$db = 'crud_php';
$user = 'root'; // ou outro, depende do teu ambiente
$pass = '';     // senha, se tiver

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
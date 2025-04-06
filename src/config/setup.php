<?php
$host = (php_sapi_name() === 'cli') ? 'localhost' : 'db';
$db = 'crud_php';
$user = 'root';
$pass = '';
$sqlFile = 'init.sql';

try {
    $pdoBase = new PDO("mysql:host=$host", $user, $pass);
    $pdoBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdoBase->exec("CREATE DATABASE IF NOT EXISTS `$db` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");

    echo "✅ Banco de dados '$db' criado ou já existente.<br>";

    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = file_get_contents($sqlFile);
    $pdo->exec($sql);

    echo "✅ Tabela criada com sucesso!";
} catch (PDOException $e) {
    die("❌ Erro: " . $e->getMessage());
}

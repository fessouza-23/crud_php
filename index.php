<?php
require_once('config/db.php');

$stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title is-3">Usuários</h1>

            <a href="create.php" class="button is-primary mb-4">+ Novo Usuário</a>

            <table class="table is-bordered is-striped is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['nome'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $user['id'] ?>" class="button is-small is-info">Editar</a>
                            <a href="delete.php?id=<?= $user['id'] ?>" class="button is-small is-danger" onclick="return confirm('Tem certeza?')">Excluir</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>

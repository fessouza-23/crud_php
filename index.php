<?php
require_once('config/db.php');

$stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Usuários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        i {
            margin-right: 0.4rem;
        }

        .table-container {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 4px rgba(10, 10, 10, 0.7);
        }
        
        .table tbody tr:first-child td {
            border-top: none;
        }
        
        .table tbody tr:last-child td {
            border-bottom: none;
        }
        
        .table tr td:first-child, .table tr th:first-child {
            border-left: none;
        }
        
        .table tr td:last-child, .table tr th:last-child {
            border-right: none;
        }

        .button-container {
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>
    <section class="section">
        <div class="container has-text-centered">
            <h1 class="title is-3 has-text-primary">
                <i class="fas fa-users"></i> Sistema de Usuários
            </h1>
            <h2 class="subtitle is-5">
                <i class="fas fa-code"></i> CRUD em PHP usando Bulma 😁
            </h2>
        </div>
    </section>

    <section class="section pt-0">
        <div class="container is-max-widescreen">

            <a href="create.php" class="button-container button is-primary is-rounded mb-4">
                <i class="fas fa-user-plus"></i> Novo Usuário
            </a>

            <div class="table-container">
                <table class="table is-bordered is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th><i class="fas fa-hashtag"></i> ID</th>
                            <th><i class="fas fa-user"></i> Nome</th>
                            <th><i class="fas fa-envelope"></i> Email</th>
                            <th><i class="fas fa-comment"></i> Obs</th>
                            <th><i class="fas fa-cogs"></i> Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nome'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['obs'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $user['id'] ?>" class="button is-small is-info is-rounded">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <a href="delete.php?id=<?= $user['id'] ?>" class="button is-small is-danger is-rounded" onclick="return confirm('Tem certeza?')">
                                    <i class="fas fa-trash-alt"></i> Excluir
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>
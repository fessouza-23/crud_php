<?php
require_once('config/db.php');
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$user) die('Usuário não encontrado!');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Editar Usuário</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body class="section">
<div class="container">
  <h1 class="title">Editar Usuário</h1>

  <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">

    <div class="field">
      <label class="label">Nome</label>
      <div class="control">
        <input class="input" type="text" name="nome" value="<?= $user['nome'] ?>" required>
      </div>
    </div>

    <div class="field">
      <label class="label">Email</label>
      <div class="control">
        <input class="input" type="email" name="email" value="<?= $user['email'] ?>" required>
      </div>
    </div>

    <div class="field is-grouped">
      <div class="control">
        <button class="button is-warning" type="submit">Atualizar</button>
      </div>
      <div class="control">
        <a class="button is-light" href="index.php">Cancelar</a>
      </div>
    </div>
  </form>
</div>
</body>
</html>

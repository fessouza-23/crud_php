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
  <title>Sistema de Usuários</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    i {
      margin-right: 0.4rem;
    }
    
    .section-title {
      margin-bottom: 2rem;
    }

    .is-update {
      background-color:rgb(216, 178, 80);
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
      <div class="section-title">
        <h1 class="title is-4">
          <i class="fas fa-edit"></i> Editar Usuário
        </h1>
      </div>

      <div class="form-container">
        <form action="update.php" method="post">
          <input type="hidden" name="id" value="<?= $user['id'] ?>">

          <div class="field">
            <label class="label"><i class="fas fa-user"></i> Nome</label>
            <div class="control">
              <input class="input is-rounded" type="text" name="nome" value="<?= $user['nome'] ?>" required>
            </div>
          </div>

          <div class="field">
            <label class="label"><i class="fas fa-envelope"></i> Email</label>
            <div class="control">
              <input class="input is-rounded" type="text" name="email" value="<?= $user['email'] ?>">
            </div>
          </div>

          <div class="field">
            <label class="label"><i class="fas fa-envelope"></i> Obs</label>
            <div class="control">
              <input class="input is-rounded" type="text" name="obs" value="<?= $user['obs'] ?>">
            </div>
          </div>

          <div style="margin-top: 1.5rem;" class="field is-grouped">
            <div class="control">
              <button class="button is-update is-rounded" type="submit">
                <i class="fas fa-save"></i> Atualizar
              </button>
            </div>
            <div class="control">
              <a class="button is-light is-rounded" href="index.php">
                <i class="fas fa-arrow-left"></i> Cancelar
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>
</html>
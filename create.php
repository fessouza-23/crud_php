<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Usuário</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body class="section">
<div class="container">
  <h1 class="title">Cadastrar Novo Usuário</h1>

  <form action="store.php" method="post">
    <div class="field">
      <label class="label">Nome</label>
      <div class="control">
        <input class="input" type="text" name="nome" required>
      </div>
    </div>

    <div class="field">
      <label class="label">Email</label>
      <div class="control">
        <input class="input" type="email" name="email" required>
      </div>
    </div>

    <div class="field is-grouped">
      <div class="control">
        <button class="button is-success" type="submit">Cadastrar</button>
      </div>
      <div class="control">
        <a class="button is-light" href="index.php">Voltar</a>
      </div>
    </div>
  </form>
</div>
</body>
</html>

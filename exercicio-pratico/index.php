<?php
    $usuario = $_COOKIE['usuario'];
    $senha = $_COOKIE['senha'];
    $mensagem = $_GET['mensagem'] ?: '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <form action="login.php" method="post">
      <h4><?= $mensagem ?></h4>
      <br>
    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" placeholder="Digite o login..." value="<?= $usuario ?: '' ?>" >
      <br>
    <label for="password">Senha:</label>
    <input type="password" name="password" placeholder="Digite a sua senha..." value="<?= $senha ?: '' ?>">

    <label for="lembrar">Tema Preferido:</label>
    <select name="tema">
      <option value="escuro">Escuro</option>
      <option value="claro">Claro</option>
    </select><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
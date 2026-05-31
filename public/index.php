<?php
// verificar se os dados do formulário foram enviados

if(!empty($_POST['login']) && !empty($_POST['senha'])){
    // verifica se login == admin e senha == admin
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $mensagem = null;

    if ($login == 'admin' && $senha == 'admin'){
        $mensagem = "Você logou com sucesso!";
    } else {
        $mensagem = "Usuário ou senha inválidos!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Campanha publicitária</title>
</head>
<body>
<h2>Envie usando o Método POST</h2>
<form action="index.php" method="POST">
    <label for="login">Login:</label>
    <input type="text" name="login" id="login" placeholder="Digite o login...">
    <br>
    <br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" placeholder="Digite a senha...">
    <input type="submit" value="Enviar">

    <?php
    if(!empty($mensagem)){
        echo $mensagem;
    }
    ?>
</form>
</body>
</html>
<?php
// verificar se os dados do formulário foram enviados

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    echo "Foi enviado um formulário com sucesso!";
//} else {
//    echo "Ainda não foi enviado nada!";
//}

if(!empty($_POST['login']) && !empty($_POST['senha'])){
    $login = htmlspecialchars($_POST['login']);
    $senha = htmlspecialchars($_POST['senha']);

    if($login == 'admin' && $senha == 'admin'){
        $msg = 'login efetuado com sucesso!';
    } else {
        $msg = 'login ou senha incorretos!';
    }
} else {
    $msg = 'Preencha todos os campos!';
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
<form action="" method="POST">
    <label for="login">Login:</label>
    <input type="text" name="login" id="login" placeholder="Digite o login..." value="<?= $login ? $login : '' ?>">
    <br>
    <br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" placeholder="Digite a senha..." value="<?= $senha ? $senha : ''?>">
    <input type="submit" value="Enviar">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo $msg;
    }
    ?>
</form>

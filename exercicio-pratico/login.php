<?php
/**
 * Usuário válido: admin
 * Senha válida: admin
 * ---
 *
 */
session_start();

if(!empty($_POST['usuario']) && !empty($_POST['password'])){
    $login = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['password']);
    $tema = htmlspecialchars($_POST['tema']);

    if ($login == 'admin' && $senha == 'admin'){
        $_SESSION['usuario'] = $login;
        $_SESSION['password'] = $senha;
        $_SESSION['tema'] = $tema;
        // o cabeçalho "Location:". Ele não só envia o cabeçalho de volta para o navegador,
        // mas também retorna um código de status REDIRECT (302) para o navegador
        // a menos que o código de status 201 ou um 3xx já tenha sido enviado.
        header("Location: welcome.php");
        exit();
    } else {
        setcookie("usuario", $login);
        setcookie("senha", $senha);
        setcookie('tema', $tema);
        echo "Usuário ou senha incorretos!";
        echo "<br><a href='index.php'>Tentar novamente</a>";
    }
} else {
    echo "Preencha todos os campos!";
    echo "<br><a href='index.php'>Voltar</a>";
}


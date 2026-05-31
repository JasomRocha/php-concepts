<?php
session_start();

if(!empty($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $senha = $_SESSION['senha'];
} else {
    header("location:index.php");
    exit();
}


/**
 * Deve exibir "Bem-vindo [LOGIN DO USUARIO] se ele estiver logado".
 * Deve ter a opção de sair.
 *
 */
?>

<h1>Bem vindo, <?= $usuario ?> se ele estiver logado</h1>
<br>
<a href="logout.php">Sair</a>


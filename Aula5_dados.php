<?php

// AULA 5 - CAPTURANDO DADOS COM POST

//$_GET - Dados são passados pela URL
// limite de 2000 caracteres
// Dados ficam expostos e sção fácilmente manipuláveis

//$_POST - Dados são passados pelo corpo da requisição HTTP
// Não há limite de tamanho no post (Servidores php geralmente limitam para evitar sobrecarga no post)
// Os dados não sãop tão facilmente manipuláveis

if(!empty($_POST['login']) && !empty($_POST['senha'])){
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    echo 'Seu Login: ' . $login . ' Sua Senha: ' . $senha;
} else {
    echo "Login ou senha não definidos";
}


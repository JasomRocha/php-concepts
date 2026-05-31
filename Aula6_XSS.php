<?php

// AULA 6 - FORMULÁRIOS SÃO CAMPOS DE ENTRADAS DO USUÁRIOS
// XSS É UM TIPO DE ATAQUE ONDE HÁ INJEÇÃO DE CÓDIGO EM CAMPOS DE FORMULÁRIOS
// ISSO PODE GERAR DANOS AO SISTEMA

// htmlspecialchars
// Não permite que os códigos sejam executados, ele até renderiza mas não executa o código malicioso

if(!empty($_POST['login']) && !empty($_POST['senha'])){
    $login = htmlspecialchars($_POST['login']);
    $senha = htmlspecialchars($_POST['senha']);

    echo 'Seu Login: ' . $login . ' Sua Senha: ' . $senha;
} else {
    echo "Login ou senha não definidos";
}


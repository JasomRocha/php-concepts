<?php

// AULA 4 - RECEBENDO DADOS DE UM FORMULÁRIO

//echo "<pre>";
//echo $_GET['pessoa'];

if(!empty($_GET['login']) && !empty($_GET['senha'])){
    $login = $_GET['login'];
    $senha = $_GET['senha'];

    echo 'Seu Login: ' . $login . ' Sua Senha: ' . $senha;
} else {
    echo "Login ou senha não definidos";
}


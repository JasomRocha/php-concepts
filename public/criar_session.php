<?php
// Session ficam guardados no servidor
// pelo navegador eu não consigo acessar diretamente

// para abrirmos uma sessão no nosso servidor usamos a função session_start()
// se a sessão existir ele vai usar a sessão, se ela não existir ele cria
session_start();

$_SESSION['teste'] = '123';
$_SESSION['name'] = 'Jasom';
$_SESSION['idade'] = 28;


// é criado um código como cookie com o código da session
// quando dispara a requisição o servidor entende que aquele código se trata daquela sessão
// dessa forma ele lê o arquivo de sessão daquele domínio e acesso específico


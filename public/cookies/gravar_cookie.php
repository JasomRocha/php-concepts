<?php

// cookie -- arquivo de texto atrelado a um domínio
// esses arquivos são enviados a cada requisdição de um determinado domínio

// primeiro parametro é o nome do cookie, o segundo parametro é o valor do cookie e o terceiro pode ser um tempo de expiração do cookie
// os cookies são gravados no navegador, ou seja, no lado do cliente
// se não definirmos a expiração do cookie eles ficam guardados indefinidamente
setcookie('meu_cookie', 'valor_do_meu_cookie');
setcookie('meu_cookie2', 'valor_do_meu_cookie');
setcookie('meu_cookie3', 'valor_do_meu_cookie');


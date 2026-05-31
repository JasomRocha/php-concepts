<?php
// Sobrescrevemos o cookie passando um tempo de expiração negativo isso fará com que o cookie seja deletado
setcookie('meu_cookie', '', -1 );
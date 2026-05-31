<?php

// Apaga o valor de um campo do meu array no arquivo .txt no servidor
// Mas nao apaga o cookie no navegador, pois o arquivo ainda tem outros dados
unserialize($_SESSION['idade']);

// Se o usuário apagar os cookies o php perde a referência para o arquivo
// com isso tudo que estava salvo de informações úteis são perdidas
// por isso nao salvamos informações sensíveis nas sessions
<?php

// Capturando dados com o Get
// Quando desejamos passar dados ao PHP através do navegador podemos utilizar as querystrings
// para o php localhost:8000/index.php/dados?nome=jasom
// a parte antes da interrogaçao se cham URI a parte após a interrogação são os dados que estamos passando para o servidor

// AULA 1 - SUPERGLOBAIS NO PHP
// SÃO VARIÁVEIS QUE ESTÃO DEFINIDAS PRA GENTE NO ESCOPO GLOBAL
// $_GET -> SUPERGLOBAL QUE CAPTURA OS DADOS NA VARIÁVEL GET
echo '<pre>';
var_dump($_GET);
echo '</pre>';

echo "Olá, visitante";

// AULA 2 - MÚLTIPLOS PARÂMETROS COM QUERY STRING
// para o php localhost:8000/index.php/dados?nome=jasom


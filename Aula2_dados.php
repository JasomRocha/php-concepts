<?php

// Capturando dados com o Get
// Quando desejamos passar dados ao PHP através do navegador podemos utilizar as querystrings
// para o php localhost:8000/index.php/dados?nome=jasom
// a parte antes da interrogaçao se cham URI a parte após a interrogação são os dados que estamos passando para o servidor

// AULA 2 - MÚLTIPLOS PARÂMETROS COM QUERY STRING
// para o php localhost:8000/index.php/Aula2_dados?nome=jasom&idade=28&cidade=Jampa

$numeroCampanha = $_GET['campanha'];

?>

<h1>Olá, visitante</h1>
<br>
<br>
<h2>Você veio pela campabnha numero <?= $numeroCampanha ?> </h2>

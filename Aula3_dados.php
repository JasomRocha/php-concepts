<?php

// Capturando dados com o Get
// Quando desejamos passar dados ao PHP através do navegador podemos utilizar as querystrings
// para o php localhost:8000/index.php/dados?nome=jasom
// a parte antes da interrogaçao se cham URI a parte após a interrogação são os dados que estamos passando para o servidor

// AULA 3 - VALIDANDO DADOS VAZIOS NA QUERY STRING
// para o php localhost:8000/index.php/Aula2_dados?nome=jasom&idade=28&cidade=Jampa

// isset() verifica se a variável foi setada, mas ignora totalmente se ela vier vazia, considera válido
// empty() verifica se a variável foi setada e se ela possui valor

if (!empty($_GET['campanha']))
{
    $numeroCampanha = $_GET['campanha'];
    echo "Campanha: " . $numeroCampanha . "<br>";
} else {
    echo "Variável Campanha não foi definida.";
}



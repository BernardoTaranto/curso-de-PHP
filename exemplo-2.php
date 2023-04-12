<?php

/*
$anoNascimento = 1985;

$nomeCompleto = "";*/
//Na linha de baixo temos uma variável com número e o nome

$nome1 = "Bernardo";

$sobrenome = "Taranto";

$nomeCompleto = $nome1 . " " . $sobrenome; // a concatenação em PHP é feita com o sinal(. ponto)

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1); // unset apaga a variável da memória

if (isset($nome1)) { 

    echo $nome1;

}
// isset verifica se a variável existe
?>
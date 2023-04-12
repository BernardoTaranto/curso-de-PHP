<?php

$nome = "Bernardo";
$site = "www.google.com.br";

$ano = 1985;
$salario = 5500.99;
$bloqueado = false;
/////////////////////////////////////////////Inteiro, string, float e booleano são variáveis do tipo básica
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

$nascimento = new DateTime(); // NEW classe nativa do PHP que sempre vai se referir a ORIENTAÇÃO AO OBJETO

//var_dump($nascimento);
/////////////////////////////////////////////Arrays são variáveis do tipo composto

//////////////////////////////RESOURCE e NULL são tipos especiais de variáveis
$arquivo = fopen("exemplo-3.php", "r");

var_dump($arquivo);

//$nulo = NULL;
//$vazio = "";

?>
<?php

$nome = "Bernardo";

function teste() {

    global $nome; // chama a variável declarada fora da função 
    echo $nome;

}

function teste2() {

    $nome = "Taranto";

    echo $nome."agora no teste2";

}

teste();
teste2();

?>
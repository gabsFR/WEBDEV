<?php

// print_r($_REQUEST);

$nome = $_REQUEST['campo_nome'];
$sobrenome = $_REQUEST['campo_sobrenome'];
$senha = $_REQUEST['campo_senha'];

for ($i=0; $i < 5; $i++) { 
    print ".";
    sleep(1);
}

print "Seu nome completo é $nome $sobrenome <br>";

if (strlen($senha) < 6) {
    print "cuidado, sua senha ta vulneravel";
}
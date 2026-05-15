<?php

$anjo = 0;
$safadeza = 0;

function safadao(int $n)
{
    $somatorio = 0;
    for ($i = 1; $i < $n; $i++) {
        $somatorio += $i;
    }
    return $somatorio;
}
function somaDigitos(int $numero)
{
    $soma = 0;
    while ($numero > 0) {
        $digito = $numero % 10;
        $soma += $digito;
        $numero = $numero / 10;
    }
    return $soma;
}
function safadometro(int $dia, int $mes, int $ano)
{
    global $anjo;
    global $safadeza;

    $safadeza = safadao($mes) + ((somaDigitos($ano) . (50 - $dia)) / 10);
    $anjo = 100 - $safadeza;
    return $anjo;
    return $safadeza;
}

$dia = $_REQUEST['campo_dia'];
$mes = $_REQUEST['campo_mes'];
$ano = $_REQUEST['campo_ano'];

safadometro($dia, $mes, $ano);

print "ANJO: $anjo <br>";
print "NÃO-ANJO: $safadeza";

<?php

$toupper = "strtoupper() - Retorna a string maiúscula.";
$toupper = strtoupper($toupper);
echo $toupper . "<br />";

$tolower = "strtolower() - Retorna a string minúscula.";
$tolower = strtolower($tolower);
echo $tolower . "<br />";

$substr = "substr() - Retorna parte de uma string, de acordo com os outros parâmetros";
$substr = substr($substr,0,8);
echo $substr . "<br />";

$strpad = "str_pad() - Preenche uma string para um certo tamanho com outra string";
$strpad = str_pad($strpad, 100, ".");
echo $strpad . "<br />";

$strrepeat = "str_repeat() - Repete uma string um determinado número de vezes";
$strrepeat = str_repeat($strrepeat . " ", 2);
echo $strrepeat. "<br />";

$strlen = "strlen() - Retorna o comprimento de uma string";
$strlen = "Comprimento: " . strlen($strlen);
echo $strlen. "<br />";

$strreplace = "str_replace() - Substitui todas as ocorrências de uma string por outra";
$strreplace = str_replace("string", "TEXTO", $strreplace);
echo $strreplace. "<br />";

$strpos = "strpos() - Encontra a posição da primeira ocorrência de uma string";
$strpos = "Posição: " . strpos($strpos, "primeira");
echo $strpos. "<br />";
<?php
$texto = '10';
$num = (integer) $texto;
$texto = (string) $num;

$valor = 3.2;
echo $valor;
$valor = (int) $valor;
echo $valor;

$b = 0;
$num = (bool) $b;
$num = (bool) 45;
$num = (bool) -5;

$num = 200;
settype($num, 'int');

$valor = 55;
$valor = (bool) $valor;
if (is_bool($valor)) {
    echo "Verdadeiro";
} else {
    echo "Falso";
}

$a = 1.99;
$b = true;
 
var_dump($a, $b);

if (isset($b)) echo "O campo cidade não foi preenchido"; else echo "O campo cidade foi preenchido";

$b = null;
if (isset($b)) echo "O campo cidade não foi preenchido"; else echo "O campo cidade foi preenchido";

$a = 0;

if (empty($a)) echo '$a está vazia. </br>'; else echo '$a não está vazia </br>';

$a = '';

if (empty($a)) echo '$a está vazia. </br>'; else echo '$a não está vazia </br>';

$a = null;

if (empty($a)) echo '$a está vazia. </br>'; else echo '$a não está vazia </br>';

$a = ' ';

if (empty($a)) echo '$a está vazia. </br>'; else echo '$a não está vazia </br>';
?>
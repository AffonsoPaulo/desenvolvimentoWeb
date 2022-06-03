<?php
// CONSTANTES
    define('PI', 3.1416);
    define('TITULO', 'Comprimento da circunferência');
    $raio = 3;
    $circunferencia = 2 * PI * $raio;
    echo TITULO . " : " . $circunferencia;
// CONSTANTES JÁ DEFINIDAS (CTRL + U):
    /* print_r(get_defined_constants()); */

// OPERADORES DE ATRIBUIÇÃO
    $x = 10;
    echo $x . '</br>';
    $x += 5;
    echo $x . '</br>';
    $x *= 2;
    echo $x . '</br>';
    $x /= 3;
    echo $x . '</br>';
    $x -= 5;
    echo $x . '</br>';
    $x %= 2;
    echo $x . '</br>';

    $s = 'Ola';
    echo $s . '</br>';
    $s .= ', Mundo!';
    echo $s . '</br>';
    
    $a = 5;
    $b = $a ++;
    echo $b . '</br>';
    $a = 5;
    $b = ++$a;
    echo $b . '</br>';

// OPERADORES ARITMÉTICOS

    $a = 5;
    $restoDaDivisaoPorDois = $a % 2;
    echo $restoDaDivisaoPorDois;
    
    $b = 2**3;
    echo $b;

// OPERADORES COMPARATIVOS

$a = 5;
$b = 5;

if ($a == $b) {
    echo '$a e $b são iguais </br>';
}

$a = 6;

if ($a != $b) {
    echo '$a e $b são diferentes </br>';
}

if ($a > $b) {
    echo '$a é maior que $b </br>';
}

if ($a < $b) {
    echo '$a é menor que $b </br>';
}
$a = 5;

/* if ($a >= $b) {
    echo '$a é maior ou igual a $b';
}

if ($a <= $b) {
    echo '$a é menor ou igual a $b';
} */

if ($a === $b) {
    echo '$a e $b possuem valores e tipos iguais </br>';
}

$b = 3.14;

if ($a !== $b) {
    echo '$a e $b possuem valores e tipos diferentes </br>';
}

// OPERADORES LÓGICOS
function foo () {
    return true;
}
$a = (false && foo());
$b = (true || foo());
$c = (false and foo());
$d = (true or foo());
var_dump($a, $b, $c, $d);

$e = false or true;
$f = false || true;
var_dump($e, $f);

$g = true && false;
$h = true and false;
var_dump($g, $h);

// OPERADOR TERNÁRIO

$c = ($a > $b) ? 'Maior' : 'Menor ou igual';
echo $c;
$tratamento = ('M' == $sexo) ? 'Sr.' : 'Sra.';
echo $tratamento;

// ESCOPO

function teste() {
    $z = 5;
    echo 'Durante a execução da função: '. $z .'</b>';
}

$z = 3;
echo 'Antes da execução da função: ' . $z . '</br.';
teste();
echo 'Depois da execução da função: ' . $z . '</br>';

?>
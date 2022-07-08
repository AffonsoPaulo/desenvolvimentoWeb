<?php
function digaOi() {
    echo 'Oi</br>';
}

function soma($a, $b) {
    return $a+$b;
}

digaOi();
$x = 5;
$y = 7;
$resultado = soma($x, $y);
echo "A soma de $x e $y é $resultado</br>";

function incrementar(&$num) {
    $num++;
}
incrementar($x);

function incrementarDois(&$num) {
    return $num++;
}

function somaDois(&$a, &$b) {
    $a += 3;
    $b *= 4;
    return $a+$b;
}

$x = 5;
$y = 6;

$result = soma($x, $y);
echo '$x = '.$x.'</br>';
echo '$y = '.$y.'</br>';
echo '$result = '.$result.'</br>';
$result = somaDois($x, $y);
echo '$x = '.$x.'</br>';
echo '$y = '.$y.'</br>';
echo '$result = '.$result.'</br>';

function teste($valor = "pré-definido") {
    echo $valor;
}
teste();
teste("outro valor");

function testeDois($figura, $cor = "azul") {
    echo "A figura é uma $figura e tem a cor $cor.</br>";
}

testeDois("Circulo");
testeDois("Circulo", "Verde");

function minhaFuncao() {
    $meusArgumentos = func_get_args();
    var_dump($meusArgumentos);
    echo "</br>";
}

minhaFuncao("Olá", "Mundo");
minhaFuncao(5, 7, 25, "Rafael");
minhaFuncao(7.5, 8.9);
minhaFuncao();

function somaTres($a, $b) {
    $resultado = 0;
    $argumentos = func_get_args();
    for($i = 0; $i < func_num_args(); $i++) {
        $resultado += $argumentos[$i];
    }
    return $resultado;
}

$x = 10;
$y = 20;

$somaDois = somaTres($x, $y, 80, 50);
echo 'A soma é de: '.$somaDois.'</br>';

function somaQuatro($a, $b) {
    $resultado = 0;
    $argumentos = func_get_args();
    for($i = 0; $i < func_num_args(); $i++) {
        if(is_numeric($argumentos[$i]) == true) {
            $resultado += $argumentos[$i];
        }
    }
    return $resultado;
}

$somaQuatro = somaQuatro(20, 30, "Olá", 7.89, 3);

echo 'A soma é '.$somaQuatro.'</br>';

$meuArray = array(
    'nome' => 'Juca',
    'idade' => 20,
    10 => 'Chocolate',
    11 => 500,
    'time' => 'Fluminense'
);

echo $meuArray['nome'].'</br>';
echo $meuArray['idade'].'</br>';
echo $meuArray['10'].'</br>';
echo $meuArray['11'].'</br>';
echo $meuArray['time'].'</br>';

$novoArray = array(100, 200, 300);

$a = $novoArray[0];
$b = $novoArray[1];
$c = $novoArray[2];

$trimestre = array(
    1 => 'Janeiro',
    'Feveriro', 
    'Março'
);

echo $trimestre[1].'</br>';
echo $trimestre[2].'</br>';
echo $trimestre[3].'</br>';

$exemplo[3] = 100;
$exemplo[4] = 'Texto';

$time['Thiago'] = "Botafogo";
$time['Rafael'] = "Fluminense";

echo $exemplo[3];
echo $exemplo[4];
echo "Time do Rafael: $time[Rafael]</br>";
echo "Time do Thiago: $time[Thiago]</br>";

$a = array('nome' => 'Fulano', 'celular' => null);

var_dump(isset($a['nome']));
var_dump(isset($a['celular']));
var_dump(isset($a['endereço']));

$meuArray = array('nome' => 'Fulano', 'celular' => '99999-9999', 'idade' => 30);

var_dump($meuArray);

unset($meuArray['nome']);

var_dump($meuArray);

$meuArray = array('nome' => 'Fulano', 'celular' => '99999-9999', 'idade' => 30);

var_dump($meuArray);

unset($meuArray);
/* 
var_dump($meuArray);
 */

echo '</br>';
 
$cores = array('Azul', 'Verde', 'Amarelo', 'Branco');

print_r($cores);

echo '</br>';

var_dump($cores);

echo '</br>';

foreach($cores as $chave => $valor) {
    echo "$chave = $valor </br>";
}

$meuArray = array(
    'fruta' => 'Maça', 
    'legume' => 'Batata'
);

echo "Fruta favorita: ${meuArray['fruta']}";
echo "Legume favorito: ${meuArray['legume']}";
?> 
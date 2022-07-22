<?php
function exibir($infos) {
    foreach($infos as $chave => $valor)
    echo "$chave : $valor<br/>";
}

function exibirPorReferencia(&$infos) {
    if(gettype($infos['salario']) === 'double')
        $infos['salario']+=1000;
    echo "{$infos['nome']} : {$infos['salario']}<br/>";
}

function exibirPorReferenciaComFor(&$infos) {
    foreach($infos as $chave => &$valor) {
        if(gettype($valor) === 'double')
            $valor+=400;
        echo "$chave : $valor<br/>";
    }
}

$informacoes = array(
    'nome' => 'Rafael',
    'salario' => 2600.50
);

exibir($informacoes);
echo "Depois de executar a função exibir<br/>";
var_dump($informacoes); echo "<br/><br/>";

exibirPorReferencia($informacoes);
echo "Depois de executar a função exibirPorReferencia<br/>";
print_r($informacoes); echo "<br/><br/>";

exibirPorReferenciaComFor($informacoes);
echo "Depois de executar a função exibirPorReferenciaComFor<br/>";
print_r($informacoes); echo "<br/><br/>";

$produtos = array();
$frutas = array();
$frutas[0] = "Maçã";
$frutas[] = "Banana";
$legumes = array("Inhame", "Batata");
array_push($produtos, $frutas, $legumes);
array_push($produtos, array("Couve", "Mostarda", "Rúcula"));
$produtos[1][2] = "Cenoura";
$frutas[2] = "Laranja";
$produtos[0] = $frutas;
print_r($produtos);
echo $produtos[2][1];

$frutas = array();
$frutas[0] = "Maçã";
$frutas[] = "Banana";

$legumes = array("Inhame", "Batata", "Cenoura");

$produtos['frutas'] = $frutas;
$produtos['legumes'] = array("Inhame", "Batata", "Cenoura");

$verduras = array("Couve","Mostarda", "Rúcula");

$produtos['verduras'] = $verduras;
$produtos['laticinios'][] = "Manteiga";
$produtos['laticinios'][] = "Queijo";
array_push($produtos['laticinios'], "Presunto");

$frutas[2] = "Laranja";

$produtos['frutas'] = $frutas;

print_r($produtos);

echo $produtos['laticinios'][1]."</br>";
echo $produtos['frutas'][2]."</br>";

foreach($produtos as $chave => $valor) {
    echo "<ul><strong>$chave</strong>";
    sort($valor);
    foreach($valor as $valor)
    echo "<li>".$valor."</li>";
    echo "</ul>";
}

for($linha = 0; $linha < 3; $linha++) {
    echo "<ul><strong> Linha ".$linha." da matriz </strong>";
    for($coluna = 0; $coluna < 3; $coluna++)
        echo "<li> coluna $coluna (posição [$linha][$coluna]): ".$produtos[$linha][$coluna]."</li>";
    echo "</ul";
}
?>



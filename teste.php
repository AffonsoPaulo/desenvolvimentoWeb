<?php
$texto = "Nós não desistiremos nem fracassaremos. Nós iremos até o fim. Nós lutaremos na França, lutaremos nos mares e oceanos, nós lutaremos com confiança crescente e uma força também crescente ao nosso redor. Nós defenderemos nossa ilha, qualquer que seja o preço. Nós lutaremos nas praias, lutaremos em terra firme, lutaremos nos campos e nas ruas, lutaremos nas montanhas. Nós nunca nos renderemos! </br></br>";

$texto = str_replace(".", "", $texto);
echo "$texto";
$texto = str_replace(",", "", $texto);
echo "$texto";
$texto = str_replace("!", "", $texto);
echo "$texto";
$texto = strtolower($texto);
echo "$texto";

$texto = explode(" ", $texto);
print_r($texto);

$result = count($texto);
echo "$result";
?>


<!-- <?php
$chaves = ["nome", "idade", "conjuge", "filhos"]; 
$valores = ["Marta", 23, "Fernando", "Huguinho, Zezinho, Luizinho"];

$combinar = array_combine($chaves, $valores);
print_r($combinar);
?> -->

<!-- <?php
$a = array(
    "Maria" => "41,f",
    "Pedro" => "18,h",
    "Joao" => "58,h",
    "Joana" => "15,f"
);

$nomes = "Pedro,Fernando,Joaquim,Joana,Estefane";

$nomes = explode(",", $nomes);
print_r($nomes);

foreach($nomes as $valor) {
    if(!array_key_exists($valor, $a)) echo "$valor não existe no array. </br>";
}
?> -->

<!-- <?php
$a = array(
    "Maria" => "41,f",
    "Pedro" => "18,h",
    "Joao" => "58,h",
    "Joana" => "15,f"
);

foreach($a as $chave => $valor) {
    if(strpos($valor, "f") === false) {
        echo "<ul><strong>$chave</strong>";
        echo "<li>".$valor."</li>";
        echo "</ul>";
    }   
}
?>

<?php
function multiplica($x, $y) {
    return ($x * $y);
}

$aux = multiplica(2,4);
?> -->

<!-- O comando break é utilizado dentro de for, foreach, switch e etc, ele serve para interromper o funcionamento das mesmas.

A função que converte uma string para letras minúsculas é a strtolower().

A função trim() serve para remover espaços em branco, assim como caracteres especiais da própria linguagem do PHP, como \t, \n, \r, de strings. -->
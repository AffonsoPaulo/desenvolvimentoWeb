<?php
# Escrever na Página
    echo "Oi!";

# Inserindo variáveis

$nomeDaVar = "Variavel";

# Tipos de dados

$numInt = 40;
$numFloat = 1.99;
$numBool = true;
$charString = "Texto";

# Caracteres de controle

$textJump = "Pula\n";
$textCarriage = "Pula\r";
$textTAB = "TAB\t.";

$printBackslash = "\\";
$printDollar = "\$";
$printApostrophe = '\'';
$printBackslash = "\"";

# Variáveis na String

echo "Qual o nome da variável? R: ${nomeDaVar} </br>"; // usar esse
echo "Qual o nome da variável? R: $nomeDaVar </br>";

# Término de execução

/* void die ([string $message]);
die ('Acesso nesagado');

void exit ([string $message]);
void exit (int $status); */

# Conversão de tipos 
$numAux = 40;

$numAux = (float) $numAux;
$numAux = (string) $numAux;
$numAux = (bool) $numAux;

$numAuxTwo = 50;

settype($numAuxTwo, 'int');
settype($numAuxTwo, 'float');
settype($numAuxTwo, 'bool');
settype($numAuxTwo, 'string');

# Verificar o tipo da variável

/* is_int( mixed $var ), 
is_integer( mixed $var ), 
is_long( mixed $var  ),  
is_real(  mixed  $var  ),  
is_float(  mixed  $var  ), 
is_bool( mixed $var ), 
is_string( mixed $var ), 
is_array( mixed $var  ),  
is_object(  mixed  $var  ),  
is_numeric(  mixed  $var  ), 
is_resource( mixed $var ), 
is_null( mixed $var ),
var_dump( mixed $var ). */

# Verificar se possui valor

/* isset( mixed $var ),
empty( mixed $var ), */

# If, else if, else, switch

if ("condition" == "condition") {
    # code...
} elseif ("condition" == "condition") {
    # code...
} else {
    # code...
}

$variable = 40;

switch ($variable) {
    case 40:
        echo "Oi";
        # code...
        break;
    
    default:
        echo "Oi";
        # code...
        break;
}
?>
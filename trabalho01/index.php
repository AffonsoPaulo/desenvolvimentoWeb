<?php
# Escrever na Página
    echo "Oi! </br>";

# Inserindo variáveis

$nomeDaVar = "Variavel";
echo "${nomeDaVar} </br>";

# Tipos de dados

$numInt = 40;
echo "${numInt} </br>";
$numFloat = 1.99;
echo "${numFloat} </br>";
$numBool = true;
echo "${numBool} </br>";
$charString = "Texto";
echo "${charString} </br>";

# Caracteres de controle

$textJump = "Pula\n";
$textCarriage = "Pula\r";
$textTAB = "TAB\t.";

$printBackslash = "\\";
echo "${printBackslash} </br>";
$printDollar = "\$";
echo "${printDollar} </br>";
$printApostrophe = '\'';
echo "${printApostrophe} </br>";
$printBackslash = "\"";
echo "${printBackslash} </br>";

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
echo "${numAux} </br>";
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
        echo "Oi </br>";
        # code...
        break;
    
    default:
        echo "Oi";
        # code...
        break;
}

echo "PARA ENTENDER, OLHE O ARQUIVO <b>INDEX.PHP</b>"
?>
<?php
    $nomes = $_FILES['arquivos']['name'];
    $tipos = $_FILES['arquivos']['type'];
    $tamanhos = $_FILES['arquivos']['size'];
    $nomesTemporarios = $_FILES['arquivos']['tmp_name'];
    $errors = $_FILES['arquivos']['error'];

    $max = count($nomes);
    for ($i = 0; $i < $max; ++$i) {
    echo '<br/>Nome: ', $nomes["$i"],
    '<br/>Tipo: ', $tipos["$i"],
    '<br/>Tamanho (bytes): ', $tamanhos["$i"],
    '<br/>Nome Temp.: ', $nomesTemporarios["$i"],
    '<br/>Erro: ', $errors["$i"],
    '<br/><br/>';
    }
//$campos = array('arquivo1', 'arquivo2');
//foreach ($campos as $c) {
//    echo $c,
//    '<br/>Nome: ', $_FILES["$c"]['name'],
//    '<br/>Tipo: ', $_FILES["$c"]['type'],
//    '<br/>Tamanho (bytes): ', $_FILES["$c"]['size'],
//    '<br/>Nome Temp.: ', $_FILES["$c"]['tmp_name'],
//    '<br/>Erro: ', $_FILES["$c"]['error'],
//    '<br/><br/>';
//}
?>

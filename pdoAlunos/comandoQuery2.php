<?php
require_once "conexao.php";


$comandoSql="SELECT * FROM user ORDER BY login";

try {
    $retorno = $conexao-> query($comandoSql);
    $usuarios = $retorno->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($usuarios);
    echo "</pre>";
    echo "<hr>";
    echo "Percorrendo o resultado (\$usuarios)... </br>";
    for($i = 0; $i < count($usuarios); $i++) {
        echo "Id: {$usuarios[$i]['id']} </br>";
        echo "Login: {$usuarios[$i]['login']} </br>";
        echo "<hr/>";
    }
    foreach($usuarios as $usuario) {
        echo "Id: {$usuario['id']} </br>";
        echo "Login: {$usuario['login']} </br>";
        echo "<hr/>";
    }

    foreach($usuarios as $usuario) {
        foreach($usuario as $chave => $valor) {
            echo "${chave}: {$valor} </br>";
        }
    }

//    echo "Acessando a posição 0 pelo nome das colunas. </br>";
//    echo "Id: {$usuarios[0]['id']} - Login: {$usuarios[0]['login']} </br>";
//    echo "<hr>";
//    echo "Acessando a posição 0 pelo índice das colunas. </br>";
//    echo "Id: {$usuarios[0]->id} - Login: {$usuarios[0]->login} </br>";
    echo "Consulta OK. </br>";
} catch (PDOException $e) {
    echo "Erro ao tentar consultar. ".$e->getMessage()."</br>";
}
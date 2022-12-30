<?php
require_once "conexao.php";

// SELECT com FetchAll();
/* $comandoSql="SELECT * FROM user";

try {
    $retorno = $conexao-> query($comandoSql);
    $usuarios = $retorno->fetchAll();
    echo "<pre>";
    var_dump($usuarios);
    echo "</pre>";
    echo "<hr>";
    echo "Acessando a posição 0 pelo nome das colunas. </br>";
    echo "Id: {$usuarios[0]['id']} - Login: {$usuarios[0]['login']} </br>";
    echo "<hr>";
    echo "Acessando a posição 0 pelo índice das colunas. </br>";
    echo "Id: {$usuarios[0][0]} - Login: {$usuarios[0][1]} </br>";
    echo "Consulta OK. </br>";
} catch (PDOException $e) {
    echo "Erro ao tentar consultar. ".$e->getMessage()."</br>";
} */

$comandoSql="SELECT * FROM user";

try {
    $retorno = $conexao-> query($comandoSql);
    $usuarios = $retorno->fetchAll(PDO::FETCH_OBJ);
    echo "<pre>";
    var_dump($usuarios);
    echo "</pre>";
    echo "<hr>";
//    echo "Acessando a posição 0 pelo nome das colunas. </br>";
//    echo "Id: {$usuarios[0]['id']} - Login: {$usuarios[0]['login']} </br>";
//    echo "<hr>";
    echo "Acessando a posição 0 pelo índice das colunas. </br>";
    echo "Id: {$usuarios[0]->id} - Login: {$usuarios[0]->login} </br>";
    echo "Consulta OK. </br>";
} catch (PDOException $e) {
    echo "Erro ao tentar consultar. ".$e->getMessage()."</br>";
}
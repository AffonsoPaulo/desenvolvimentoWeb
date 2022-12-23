<?php
require_once "conexao.php";

$sqlCommand = "SELECT * FROM produto";

try {
    $returnArray = $connection -> query($sqlCommand);
    $userArray = $returnArray -> fetchAll(PDO::FETCH_ASSOC);
    $returnObj = $connection -> query($sqlCommand);
    $userObj = $returnObj -> fetchAll(PDO::FETCH_OBJ);
    echo "POR MATRIZ ASSOCIATIVA: <br/>";
    foreach ($userArray as $user) {
        echo "Id: {$user['id']} </br>";
        echo "Nome: {$user['descricao']} </br>";
        echo "Preço de custo: {$user['precoCusto']} </br>";
        echo "Estoque: {$user['estoque']} </br>";
        echo "<hr/>";
    }
    echo "POR OBJETO: <br/>";
    foreach ($userObj as $user) {
        echo "Id: {$user->id} </br>";
        echo "Nome: {$user->descricao} </br>";
        echo "Preço de custo: {$user->precoCusto} </br>";
        echo "Estoque: {$user->estoque} </br>";
        echo "<hr/>";
    }
} catch (PDOException $e) {
    echo "Erro ao tentar visualizar.".$e->getMessage();
}
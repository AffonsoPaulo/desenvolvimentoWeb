<?php
require_once "conexao.php";
$sqlCommand = 'SELECT * FROM produto LIMIT 1';

try {
    $return = $connection -> query($sqlCommand);
    $user = $return -> fetchAll(PDO::FETCH_ASSOC);
    echo "Id: ".$user[0]['id']."<br/>";
    echo "Produto: ".$user[0]['descricao']."<br/>";
    echo "Preço de custo: ".$user[0]['precoCusto']."<br/>";
    echo "Estoque: ".$user[0]['estoque']."<br/>";
} catch(PDOException $e) {
    echo "Erro ao tentar visualizar.".$e->getMessage();
}
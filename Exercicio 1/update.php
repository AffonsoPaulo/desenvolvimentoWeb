<?php
require_once "conexao.php";

$sqlCommandOne = "UPDATE produto SET estoque = 20 WHERE id = 4";
$sqlCommandTwo = "UPDATE produto SET estoque = 40 WHERE id = 8";

try {
    $connection -> exec($sqlCommandOne);
    $connection -> exec($sqlCommandTwo);
    echo "Sucesso ao atualizar.";
} catch (PDOException $e) {
    echo "Erro ao tentar atualizar.".$e->getMessage();
}

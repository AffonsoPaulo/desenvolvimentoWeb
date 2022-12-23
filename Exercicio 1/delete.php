<?php
require_once "conexao.php";

$sqlCommand = "DELETE FROM produto WHERE id = 10";

try {
    $return = $connection -> exec($sqlCommand);
    echo "Sucesso ao deletar.";
} catch (PDOException $e) {
    echo "Erro ao tentar deletar.".$e->getMessage();
}
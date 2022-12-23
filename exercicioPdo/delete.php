<?php
require_once "conexao.php";
$sql = 'DELETE FROM movie WHERE title = "Joker"';

try {
    $stmt = $connection -> prepare($sql);
    $stmt -> execute();
} catch (PDOException $e) {
    echo "Falha ao tentar deletar.".$e->getMessage()."<br/>";
}

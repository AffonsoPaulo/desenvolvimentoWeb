<?php
require_once "conexao.php";

$sql = 'UPDATE movie SET IMDB = IMDB*0.9 WHERE IMDB > 8.50';

try {
    $stmt = $connection -> prepare($sql);
    $stmt -> execute();
} catch (PDOException $e) {
    echo "Falha ao tentar atualizar.".$e->getMessage()."<br/>";
}

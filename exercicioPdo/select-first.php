<?php
require_once "conexao.php";
$sql = 'SELECT m.title, g.name FROM movie m JOIN genre g ON (m.idGenre = g.id) LIMIT 1';

try {
    $stmt = $connection -> prepare($sql);
    $stmt -> execute();
    $return = $stmt -> fetchAll(PDO::FETCH_OBJ);
    echo "Título: ".$return[0]->title."<br/> Gênero: ".$return[0]->name;
} catch (PDOException $e) {
    echo "Falha ao tentar imprimir.".$e->getMessage()."<br/>";
}




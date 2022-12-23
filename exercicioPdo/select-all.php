<?php
require_once "conexao.php";
$sql = 'SELECT m.title, g.name FROM movie m JOIN genre g ON (m.idGenre = g.id)';

try {
    $stmt = $connection -> prepare($sql);
    $stmt -> execute();
    $returnObj = $stmt -> fetchAll(PDO::FETCH_OBJ);
    echo "<b style='display: flex; justify-content: center'>Por objeto:</b> <hr/>";
    foreach ($returnObj as $return) {
        echo "Título: ".$return->title."<br/>";
        echo "Gênero: ".$return->name."<br/>";
        echo "<hr/>";
    }
    $stmt = $connection -> prepare($sql);
    $stmt -> execute();
    $returnAssoc = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    echo "<b style='display: flex; justify-content: center'>Por matriz associativa:</b> <hr/>";
    foreach ($returnAssoc as $return) {
        echo "Título: ".$return['title']."<br/>";
        echo "Gênero: ".$return['name']."<br/>";
        echo "<hr/>";
    }
    // echo "Título: ".$return[0]->title."<br/> Gênero: ".$return[0]->name;
} catch (PDOException $e) {
    echo "Falha ao tentar imprimir.".$e->getMessage()."<br/>";
}




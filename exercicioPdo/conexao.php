<?php
$dsn = 'mysql:host=localhost;dbname=movieSystem;charset=utf8';
$user = 'root';
$password = '';
$connection = null;

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão efetuada com sucesso! <br/>";
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco de dados.".$e->getMessage();
    echo "<pre>".print_r($e)."</pre>";
}
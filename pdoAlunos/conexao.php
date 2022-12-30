
<?php
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8';
$usuario = 'root';
$senha = '';
$conexao = null;
try {
    $conexao = new PDO($dsn, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão efetuada com sucesso! </br>";
}  catch(PDOException $e) {
    echo "Error ao conectar com o banco de dados.".$e->getMessage();
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}
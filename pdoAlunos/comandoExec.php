<?php
require_once "conexao.php";
// CREATE TABLE
/*$comandoSql="CREATE TABLE IF NOT EXISTS user(
    id int AUTO_INCREMENT PRIMARY KEY,
    login CHAR(6) NOT NULL,
    senha char(6) NOT NULL)ENGINE=INNODB";

try {
    $retorno = $conexao-> exec($comandoSql);
    echo "Tabela criada (ou já existia) com sucesso. {$retorno} </br>";
} catch (PDOException $e) {
    echo "Erro ao tentar criar uma tabela. ".$e->getMessage()."</br>";
} */

/* $comandoSql="INSERT INTO user
VALUES(1, 'rafael', '123456'),
      (2, 'renata', '123456'),
      (3, 'verly', '123456'),
      (4, 'vitor', '123456')";

try {
    $retorno = $conexao-> exec($comandoSql);
    echo "Foram inseridos {$retorno} registros </br>";
} catch (PDOException $e) {
    echo "Erro ao tentar inserir. ".$e->getMessage()."</br>";
} */


/* $comandoSql="UPDATE user
SET login = 'verlly'
WHERE login = 'verly'";

try {
    $retorno = $conexao-> exec($comandoSql);
    echo "Alterei {$retorno} registro(s). </br>";
} catch (PDOException $e) {
    echo "Erro ao tentar atualizar. ".$e->getMessage()."</br>";
} */

$comandoSql="DELETE FROM user
WHERE loginn = 'verlly'";

try {
    $retorno = $conexao-> exec($comandoSql);
    echo "Removi {$retorno} registro(s). </br>";
} catch (PDOException $e) {
    echo "Erro ao tentar remover. ".$e->getMessage()."</br>";
}
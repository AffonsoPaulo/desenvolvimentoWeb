CREATE DATABASE IF NOT EXISTS empresa CHARSET=utf8 COLLATE=utf8_unicode_c;

use empresa;

CREATE TABLE produto(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    descricao varchar(50) NOT NULL,
    precoCusto decimal(9,2) NOT NULL,
    estoque int NOT NULL,
    UNIQUE INDEX descricao_produto(descricao))ENGINE=InnoDB;


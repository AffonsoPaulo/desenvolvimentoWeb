CREATE DATABASE IF NOT EXISTS movieSystem CHARSET=utf8 COLLATE=utf8_unicode_ci;
use movieSystem;
CREATE TABLE genre(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(64) NOT NULL,
    UNIQUE INDEX title_genre(name)
)ENGINE=InnoDB;
CREATE TABLE movie(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(64) NOT NULL,
    releaseDate date NOT NULL,
    IMDB decimal(9,2) NOT NULL,
    idGenre int NOT NULL,
    UNIQUE INDEX title_filme(title, idGenre),
    FOREIGN KEY (idGenre) REFERENCES genre(id)
)ENGINE=InnoDB;


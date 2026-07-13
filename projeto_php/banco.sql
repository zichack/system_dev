CREATE DATABASE projeto_php;

USE projeto_php;
    CREATE TABLE jogos(
        id INT AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(100) NOT NULL,
        genero VARCHAR(50) NOT NULL,
        plataforma VARCHAR(50) NOT NULL ,
        ano_lancamento INT NOT NULL);

INSERT INTO jogos (titulo, genero, plataforma, ano_lancamento) 
VALUES ('Kingdom Come: Deliverance', 'RPG', 'PC', 2018);
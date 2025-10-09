CREATE DATABASE licao;
USE licao;

CREATE TABLE alunos (
	id INT AUTO_INCREMENT KEY,
    nome VARCHAR(100),
    idade INT,
    CPF VARCHAR(100)
);

INSERT INTO alunos(nome, idade, CPF)
VALUES("Eduardo", 16, "12345678912"),
("Beatriz", 16, "123");

CREATE DATABASE db_help;
USE db_help;

CREATE TABLE tb_usuario(
	id INT PRIMARY KEY AUTO_INCREMENT,
  	nome VARCHAR(220) NOT NULL,
    email varchar(220) NOT NULL,
	usuario varchar(220) NOT NULL,
	senha varchar(220) NOT NULL,
  	dataNascimento date,
  	telefone VARCHAR(220) NOT NULL,
  	cpf VARCHAR(220) NOT NULL,
  	cep VARCHAR(220) NOT NULL,
  	numeroSeguranca VARCHAR(220),
  	deficiencia VARCHAR(40) NOT NULL,
  	alergia varchar(55) NOT NULL,
	sangue varchar(55)NOT NULL,
  	pcd BOOLEAN NOT NULL
   
);



drop table tb_usuario;

SELECT * FROM tb_usuario;





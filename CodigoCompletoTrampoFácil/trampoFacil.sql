CREATE SCHEMA TrampoFacil;

use trampoFacil;  

CREATE TYPE TipoUsuario AS{
	nome varchar (50),
	cpf char(11),
	email varchar (20),
	telefone integer(11);
	
	INSTANTIABLE
	NOT FINAL 	
	
};


CREATE TYPE TipoUsuarioPrestador UNDER TipoUsuario AS{
	servicoPrestado VARCHAR(30),
	servicoPrestado REF (TipoContrato) SCOPE (Contrato),
	INSTANTIABLE
	NOT FINAL
};

CREATE TYPE TipoUsuarioRecebedor UNDER TipoUsuario AS{
	servicoRecebido VARCHAR(30),
	servicoRecebido REF (TipoContrato) SCOPE (Contrato),
	INSTANTIABLE
	NOT FINAL
};


	CREATE TABLE Usuario OF TipoUsuario
		REF IS nome SYSTEM GENERATED;
	CREATE TABLE UsuarioPrestador OF TipoUsuarioPrestador UNDER Usuario;
	CREATE TABLE UsuarioRecebedor OF TipoUsuarioRecebedor UNDER Usuario;




CREATE TYPE TipoContrato AS{
	idContrato int (10),
	valor float (10,2),
	prazo varchar(10),
	servico varchar(50),
	nomePrestador varchar(50),
	nomeRecebedor varchar(50),
	
	INSTANTIABLE
	NOT FINAL 
	REF IS SYSTEM GENERATED

};

CREATE TABLE Contrato OF Tipo Contrato;

--teste
INSERT INTO UsuarioRecebedor
VALUES ('Ana Maria Braga',' 123456789-10','ana@globo.com','11111111', 'cantar');

INSERT INTO UsuarioPrestador
VALUES ('Tiago Iorc','123456789-11','tiago@seila.com','22222222', 'cantar');





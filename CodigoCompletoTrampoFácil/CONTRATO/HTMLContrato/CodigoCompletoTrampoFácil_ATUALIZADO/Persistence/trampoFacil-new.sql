CREATE SCHEMA TrampoFacil;

use TrampoFacil;  

CREATE TABLE Usuario(
	nome varchar(50) PRIMARY KEY NOT NULL,
	cpf char(11) NOT NULL,
	email varchar (20) NOT NULL,
	telefone integer(11) NULL
);

CREATE TABLE UsuarioPrestador(
	nome varchar (50) PRIMARY KEY NOT NULL,
	servicoPrestado VARCHAR(30),
	foreign key (nome) references Usuario(nome)
);

CREATE TABLE UsuarioRecebedor(
	nome varchar (50) PRIMARY KEY NOT NULL,
	servicoRecebido VARCHAR(30),
	foreign key (nome) references Usuario(nome)
);

CREATE TABLE Contrato(
	idContrato int (10) PRIMARY KEY NOT NULL,
	servico varchar(50) NOT NULL,
	valor float (10,2) NOT NULL,
	prazo varchar(10) NOT NULL,
	
	nomePrestador varchar (50) NOT NULL,
	nomeRecebedor varchar(50) NOT NULL,
	foreign key (nomePrestador) references Usuario(nome),
	foreign key (nomeRecebedor) references Usuario(nome)
);

--insert into Usuario...
--insert into UsuarioPrestador...
--insert into UsuarioRecebedor...
--insert into Contrato...


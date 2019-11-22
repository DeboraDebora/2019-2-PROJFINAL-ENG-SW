CREATE SCHEMA TrampoFacil;

use TrampoFacil;  

--criacao das tabelas
CREATE TABLE PrestadorServicos
{
		nomePrest int primary key,
		tipoServico varchar(30),
		contatoPrest varchar(30), --pode ser telefone, email ou endereco
		infoAdicPrest varchar(50);
}

	
CREATE TABLE RecebedorServicos
{
	nomeReceb int primary key,
	tipoServico varchar(30);
	contatoReceb varchar(30); --pode ser nome,email ou telefone
	infoAdicPrest varchar(30);
}


CREATE TABLE Contrato
{
	idContrato int primary key;
	preco float (10);
	prazo varchar(10);
	tipoServico varchar(50);
	nomePrest varchar(50) foreign key; 
	nomeReceb varchar(50) foreign key;

}



--criacao das operacoes nas tabelas

--cadastrar servico
INSERT INTO PrestadorServicos
VALUES('Jose Costa', 'pintor', '3587669898', 'preco a combinar');
INSERT INTO PrestadorServicos
VALUES ('Ana Silva', 'costureira', 'atelie@gmail.com', 'nenhuma');

commit;

--consultar servico
SELECT nomePrest 
FROM PrestadorServicos
WHERE nomePrest = 'Ana Silva'; 

--alterar/atualizar
UPDATE table PrestadorServicos
SET contatoPrest = '3588888888'
WHERE nomePrest = 'Jose Costa';  

--excluir
DELETE(*) FROM PrestadorServicos
WHERE nomePrest = 'Jose Costa';

-- ------
--CRUD QUATRO OPERACOES EM 3 OU MAIS TABELAS

INSERT INTO RecebedorServicos
VALUES('Carlos Coelho', 'pintor', '3577777777', 'ate 100 reais');
INSERT INTO PrestadorServicos
VALUES ('Ana Carolina', 'aula ingles', 'carol@gmail.com', 'nenhuma');
INSERT INTO Contrato
VALUES (001, '10 dias', 'pintor', 'Jose Costa', 'Carlos Coelho');

commit;

--consultar servico
SELECT nomePrest 
FROM PrestadorServicos
WHERE nomePrest = 'Ana Silva'; 

SELECT nomeReceb
FROM RecebedorServicos
WHERE nomeReceb ='Carlos Coelho';

SELECT preco
FROM Contrato
WHERE preco= '100.00';

--alterar/atualizar
UPDATE table PrestadorServicos
SET contatoPrest = '3588888888'
WHERE nomePrest = 'Jose Costa';  

UPDATE table RecebedorServicos
SET contatoReceb = '3299999999';
WHERE nomeReceb = 'Carlos Coelho';

UPDATE table Contrato
SET preco = '120.00'
WHERE idContrato = '001';


--excluir
DELETE(*) FROM PrestadorServicos
WHERE nomePrest = 'Jose Costa';

DELETE(*) FROM RecebedorServicos
WHERE nomeReceb = 'Carlos Coelho';

DELETE(*) from Contrato
WHERE idContrato = '001'; 








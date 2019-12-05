<? php
class Contrato{
	

private $idContrato;
private $servico;
private $valor;
private $prazo;
private $nomePrestador;
private $nomeRecebedor;

//function construct ($vidContrato, $vservico, $vvalor, $vprazo, $vnomePrestador, $vnomeRecebedor){

//}

function getIdContrato(){
	return $this->idContrato;
}
function getServico(){
	return $this->servico;
}
function getValor(){
	return $this->valor;
}
function getPrazo(){
	return $this->prazo;
}

function getNomePrestador(){
	return $this->nomePrestador;
}

function getNomeRecebedor(){
	return $this->nomeRecebedor;
?>



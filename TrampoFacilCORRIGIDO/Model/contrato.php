<? php
class Contrato{
	

private $idContrato;
private $servico;
private $valor;
private $prazo;
private $nomePrestador;
private $nomeRecebedor;

/function __construct ($vidContrato, $vservico, $vvalor, $vprazo, $vnomePrestador, $vnomeRecebedor){
	$this->idContrato = $vidContrato;
	$this->servico = $vservico;
	$this->valor = $vvalor;
	$this->prazo = $vprazo;
	$this->nomePrestador= $nomePrestador;
	$this->nomeRecebedor= $nomeRecebedor;
}

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



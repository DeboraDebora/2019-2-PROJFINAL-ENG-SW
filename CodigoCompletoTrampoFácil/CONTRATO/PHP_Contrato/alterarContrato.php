

<?php


include_once '..\Persistence\connection.php';
include_once '..\Persistence\ContratoDAO.php';

$contrato->getIdContrato() . "','" .
$contrato->getServico() . "','".
$contrato->getValor() . "','".
$contrato->getPrazo() . "','".
$contrato->getNomePrestador() . "','"
$contrato->getNomeRecebedor()."','")";


$c= new Contrato ($idContrato, $servico, $valor, $prazo, $nomePrestador, $nomeRecebedor);

$conexao = new Connection();
$conexao= $conexao->getConnection();


$usuariodao = new ContratoDAO();
$res = contratodao->alterarIdContrato($idContrato, $servico, $valor, $prazo, $nomePrestador, $nomeRecebedor);

if ($res==TRUE){
	echo "Registro atualizado com sucesso;
} else {
	echo "Erro de atualizacao de registro: " . $conexao->error;
}

?>
	



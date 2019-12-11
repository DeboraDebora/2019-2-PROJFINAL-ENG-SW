
<?php


include_once '..\Persistence\Connection.php';
include_once '..\Persistence\contratoDAO.php';


$idContrato= $POST['cidContrato']; 

$conexao = new Connection();
$conexao= $conexao->getConnection();

$contratodao = new ContratoDAO ();
$res = $contratodao-> excluirIdContrato($idContrato, $conexao);

if ($res === TRUE){
	echo "Contrato deletado com sucesso";
} else {
	echo "Erro ao deletar: " . $conexao->error;
}
?>


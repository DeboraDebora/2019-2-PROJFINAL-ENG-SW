
<?php


include_once '..\Persistence\connection.php';
include_once '..\Persistence\ContratoDAO.php';


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


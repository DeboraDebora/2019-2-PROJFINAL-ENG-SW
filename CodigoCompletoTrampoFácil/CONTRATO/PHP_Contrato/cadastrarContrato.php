

<?php


include_once '..\Persistence\connection.php';

include_once '..\Persistence\ContratoDAO.php';


$idContrato = $POST['idContrato'];
$servico = $POST['servico'];
$valor= $POST['valor'];
$prazo= $POST ['prazo'];
$nomePrestador= $POST['nomePrestador'];
$nomeRecebedor= $POST['nomeRecebedor'];
			
$conexao = new Connection();
$conexao= $conexao->getConnection();

$c = new Contrato ($idContrato, $servico, $valor, $prazo, $nomePrestador, $nomeRecebedor);

$contratodao = new ContratoDAO();
$contratodao->salvar($c, $conexao);


//---desconsiderar este lembrete 
//$sql = INSERT INTO Usuario(Nome, Cpf, Email, Telefone) VALUES ('$nome, '$cpf', '$nasc', '$salario);

/*if($conn->query($sql)== TRUE){
	echo "Usuario salvo";
}
else{
	echo "Erro no cadastramento: <br>.$conn->error;
}*/
?>


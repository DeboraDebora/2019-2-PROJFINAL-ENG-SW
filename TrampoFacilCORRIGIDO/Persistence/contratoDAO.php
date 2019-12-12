

<? php
class ContratoDao{ 

	//function _construct(){ }

	function CadastrarContrato($contrato, $conn){
		
	$sql = INSERT INTO Contrato( idContrato, servico, valor, prazo,nomePrestador, nomeRecebedor) VALUES(" .
			$contrato->getIdContrato() . "','" .
			$contrato->getServico() . "','".
			$contrato->getValor() . "','".
			$contrato->getPrazo() . "','".
			$contrato->getNomePrestador() . "','"
			$contrato->getNomeRecebedor()."','")";
		
		echo "<br>" . $sql;

		if($conn->query($sql)== TRUE){
			echo "Contrato salvo";
		}
		else{
			echo "Erro no cadastramento: <br>.$conn->error;
		}
	}
	function ConsultarContrato ($conn){
		$sql= "SELECT idContrato, Servico, Valor, Prazo, NomePrestador, NomeRecebedor FROM Contrato";
		$res= $conn->query($sql);
		return $res; // pega o resultado da classe controle
	}
	
	
	function ExcluirContrato($nome, $conn){
		$sql = "DELETE FROM contrato WHERE idContrato=".$idContrato;
		$res = $conn->query(sql);
		return $res;
	}
	
	function AlterarContrato($nome, $conn){
		$sql= "UPDATE 'contrato SET '= 'servico".$c->getServico() . "'valor= '".$c->getvalor() . "'prazo= '".$c->getPrazo(). " "'nomePrestador= '"$c->getNomePrestador()." "'nomeRecebedor= ' "$c->getNomeRecebedor()." WHERE idContrato =".$idContrato;
		$res= $conn->query($sql);
		echo $res;
		return $res;
	}
}

?>






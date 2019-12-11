

<? php
class UsuarioDao{ 

	function _construct(){ }

	function CadastrarUsuario($usuario, $conn){
		$sql = INSERT INTO Usuario(Nome, Cpf, Email, Telefone) VALUES(" .
			$usuario->getNome() . "','".
			$usuario->getCpf() . "','".
			$usuario->getEmail() . "','".
			$usuario->getTelefone() . "','")";
		
		echo "<br>" . $sql;

		if($conn->query($sql)== TRUE){
			echo "Usuario salvo";
		}
		else{
			echo "Erro no cadastramento: <br>.$conn->error;
		}
	}
	function ConsultarTodosUsuarios ($conn){
		$sql= "SELECT Nome, Cpf, Email, Telefone FROM Usuario";
		$res= $conn->query($sql);
		return $res; // pega o resultado la da classe controle
	}
	function ConsultarNome($cpf, $conn){
		$sql= "SELECT Nome, Cpf, Email, Telefone FROM Usuario WHERE nome =".$nome";
		$res= $conn->query ($sql);
		echo $res;
		return $res;
	}
	
	function ExcluirUsuario($nome, $conn){
		$sql = "DELETE FROM usuario WHERE nome=".$nome;
		$res = $conn->query(sql);
		return $res;
	}
	
	function AlterarUsuario($nome, $conn){
		$sql= "UPDATE 'usuario SET 'cpf= '".$c->getCpf() . "'email= '".$c->getEmail() . "'telefone= '".$c->getTelefone(). " WHERE nome =".$cpf;
		$res= $conn->query($sql);
		echo $res;
		return $res;
	}
}

?>





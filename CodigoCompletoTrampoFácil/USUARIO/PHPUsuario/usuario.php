<? php
class Usuario{
	
	private $nome;
	private $cpf; 
	private $email; 
	private $telefone;
	


//function construct ($vnome, $vcpf, $vemail, $vtelefone);

//}

function getNome(){
	return $this->nome;
}
function getCpf(){
	return $this->cpf;
}
function getEmail(){
	return $this->email;
}
function getTelefone(){
	return $this->telefone;
}

?>



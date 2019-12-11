
<?php


include_once '..\Persistence\Connection.php';
include_once '..\Persistence\usuarioDAO.php';


$nome= $POST['cnome']; 

$conexao = new Connection();
$conexao= $conexao->getConnection();

$c = new Usuario ($nome, $cpf, $email, $telefone);

$usuariodao = new UsuarioDAO();
$res = $usuariodao->consultarNome($nome, $conexao);



//$sql = INSERT INTO Usuario(Nome, Cpf, Email, Telefone) VALUES ('$nome, '$cpf', '$nasc', '$salario);

/*if($conn->query($sql)== TRUE){
	echo "Usuario salvo";
}
else{
	echo "Erro no cadastramento: <br>.$conn->error;
}*/
?>




<?php


include_once '..\Persistence\Connection.php';
include_once '..\Persistence\usuarioDAO.php';

$nome = $POST['nome'];
$cpf = $POST['cpf'];
$email = $POST['email'];
$telefone = $POST['telefone'];


$c= new Usuario ($nome, $cpf, $email, $telefone);

$conexao = new Connection();
$conexao= $conexao->getConnection();


$usuariodao = new UsuarioDAO();
$res = $usuariodao->alterarNome($nome, $conexao);

if ($res==TRUE){
	echo "Registro atualizado com sucesso;
} else {
	echo "Erro de atualizacao de registro: " . $conexao->error;
}

?>
	
//----------

if($res->num_rows == 1){
$registro = $res->fetch_assoc();


//formulario para visualizacao de dados
echo "<!DOCTYPE html> <html><head><metacharset='UTF-8' lang='pt-br'><link rel='stylesheet' type='text/css' href='estilo.css'>
<title></title></head><body><h2>Excluir Usuario</h2>  

<form action='..\Controller\AlterarUsuario.php' method= 'POST'>
Nome: <input type='text' disabled name = 'cnome' value=' ".$registro['Nome']."'><br><br>
Cpf:  <input type='text' disabled name = 'ccpf' value=' ".$registro['Cpf']."'><br><br>
Email: <input type='text' disabled name = 'cemail' value=' ".$registro['Email']."'><br><br>
Telefone: <input type='text' disabled name = 'ctelefone' value=' ".$registro['telefone']."'><br><br>

<input type='submit' value='Alterar'>
<input type='reset value='limpar'>
</form>

</body>
</html>
//fim do formulario
	
	
?>


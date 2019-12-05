
<?php


include_once '..\Persistence\connection.php';
include_once '..\Persistence\UsuarioDAO.php';


$nome= $POST['cnome']; 

$conexao = new Connection();
$conexao= $conexao->getConnection();

$usuariodao = new UsuarioDAO ();
$res = $clientedao-> excluirNome($nome, $conexao);

if ($res === TRUE){
	echo "Registro deletado com sucesso";
} else {
	echo "Erro ao deletar: " . $conexao->error;
}
?>

//---------

//formulario para visualizacao de dados
echo "<!DOCTYPE html> <html><head><metacharset='UTF-8' lang='pt-br'><link rel='stylesheet' type='text/css' href='estilo.css'>
<title></title></head><body><h2>Excluir Usuario</h2>  

<form action='..\Controller\ExcluirUsuario.php' method= 'POST'>
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

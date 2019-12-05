

<?php


include_once '..\Persistence\connection.php';
include_once '..\Model\Usuario.php';
include_once '..\Persistence\UsuarioDAO.php';


$nome = $POST['nome'];
$cpf = $POST['cpf'];
$email = $POST['email'];
$telefone = $POST['telefone'];

$conexao = new Connection();
$conexao= $conexao->getConnection();

$c = new Usuario ($nome, $cpf, $email, $telefone);

$usuariodao = new UsuarioDAO();
$usuariodao->salvar($c, $conexao);

?>


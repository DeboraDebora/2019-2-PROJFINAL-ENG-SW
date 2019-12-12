

<?php


include_once '..\Persistence\Connection.php';
include_once '../Model/Usuario.php';
include_once '..\Persistence\UsuarioDAO.php';

$conexao = new Connection();
$conexao= $conexao->getConnection();

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$c = new Usuario($nome, $cpf, $email, $telefone);


$usuariodao = new UsuarioDAO();
$usuariodao->CadastrarUsuario($c, $conexao);

?>


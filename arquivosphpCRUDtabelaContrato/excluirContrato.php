--excluir contrato

$host= ....
$pas= ...
$banco= excluirContrato
$conexao= ...
mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());
?> 

<?php
$idContrato= $_post['idContrato'];
$valor=$_post['valor'];
$data=$_post['data'];
$servico=$_post['servico'];
$nomeUsuario= $_post['nomeUsuario'];
$nomeUsuario= $_post['nomeUsuario'];

$sql=mysql_query("INSERT INTO excluirContrato (idContrato, valor, data, servico, nomeUsuario)
VALUES('$idContrato, $valor, $data, $servico, $nomeUsuario')");
echo("Cadastro de contrato excluido com sucesso!")
?>

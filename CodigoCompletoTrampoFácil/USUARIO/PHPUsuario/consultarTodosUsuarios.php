//consultar todos usuarios

<?php


include_once '..\Persistence\connection.php';
include_once '..\Persistence\UsuarioDAO.php';


$conexao= new Connection();
$conexao= $conexao->getConnection();


$usuariodao = new UsuarioDAO();
$usuariodao->ConsultarTodosUsuarios($conexao);
$res = $clientedao->ConsultarTodosUsuarios($conexao);

if($res->num_rows > 0){
	echo formatar html->cabecalho();
	echo formatarhtml->tabela($cabecalho)
	
	
//tabela html
<DOCTYPE HTML>
<html>
<head>
<style>
table{
	font-family: arial, sans serif;
	border-collapse: collapse;
	width: 100%;
}

td, th{
	border: 1px solid #dddddd;
	text-align: left;
	paddding: 8px;
}

tr:nth-child(even){
	background-color: #dddddd;
}


</style>
</head>
<body><table>
		<tr>
			<th>nome</th>
			<th>cpf</th>
			<th>email</th>
			<th>telefone</th>
		</th>;
	 
	
	echo <table>
		<tr> //table row abrindo linha
			<th>Nome</th>
			<th>Cpf</th>
			<th>Email</th>
			<th>Telefone</th>;
		</tr>
	
	
	while($registro = $res->fetch_assoc() ){ //loop
		echo"<tr>"
		
		echo "<td>".$registro['Nome'] . "</td>."
			"<td>". $registro['Cpf'] . "</td>." 
			"<td>". $registro['Email']. "</td>."
			"<td>". $registro['Telefone']."</td>.";
		echo </tr> 
	}
	//fecha a tabela
	echo</table><body><html>
}
else {
	echo "<script>alert('nome não cadastrado!')</script>"
}
	
//Criando tabela em html com todos os usuarios
<table>
	<tr>
		<th>Nome</th>
		<th>Cpf</th>
		<th>Email</th>
	</tr>
	
	<tr>
		<td>AnaMariaBraga</td>
		<td>123456789-10</td>
		<td>ana@globo.com</td>
		<td>11111111</td>
	</tr>
	
	<tr>
		<td>Tiago Iorc</td>
		<td>123456789-11</td>
		<td>tiago@seila.com</td>
		<td>22222222</td>
	</tr>
*/


$sql = INSERT INTO Usuario(Nome, Cpf, Email, Telefone) VALUES ('$nome, '$cpf', '$nasc', '$salario);

if($conn->query($sql)== TRUE){
	echo "Usuario salvo";
}
else{
	echo "Erro no cadastramento: <br>.$conn->error";
}
?>


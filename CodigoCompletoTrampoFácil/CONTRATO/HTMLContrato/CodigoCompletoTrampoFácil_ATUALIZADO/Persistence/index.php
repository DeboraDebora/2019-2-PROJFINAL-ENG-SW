<?php
header("Content-Type: text/html; charset=iso-8859-1",true);
?>
<html>
<head><title>Trampo Fácil</title></head>
<body>
<center><h3>Trampo Fácil</h3></center>

//método post= um arquivo chama outro arquivo, passando parâmetros
<form name="form1" method="POST" action="form_incluir.php">
<table border="0" align="center" width="60%">
<?php


include("./config.php");

//chama o arquivo config.php e suas configuracoes como parametros 
$con = mysqli_connect($host, $login, $senha, $bd);
$sql = "SELECT * FROM dados_pessoais ORDER BY nome";

//guarda os resultados do select na tabela:
$tabela = mysqli_query($con, $sql);
if(mysqli_num_rows($tabela)==0){
?>
  <tr><td align="center">Não há nenhum usuario cadastrado.</td></tr>
  <tr><td align="center"><input type="submit" value="cadastrar usuario"></td></tr>
<?php
}else{
?>
	<tr bgcolor="grey"><td width="50%">Nome</td><td width="20%">Telefone</td><td width="30%"></td></tr>
<?php
  while($dados = mysqli_fetch_row($tabela)){
?>
  <tr><td><?php echo $dados[1]; ?></td>
      <td><?php echo "(".$dados[2].") ".$dados[3]; ?></td>
	  <td align="center">
	    <input type="button" value="Excluir" onclick="location.href='excluir.php?codigo=<?php echo $dados[0]; ?>'">
	    <input type="button" value="Alterar" onclick="location.href='form_incluir.php?codigo=<?php echo $dados[0]; ?>'">
	  </td>
  </tr>
<?php
  }
?>
<tr bgcolor="grey"><td colspan="3" height="5"></td></tr>
<?php
mysqli_close($con);
?>
<tr><td colspan="3" align="center"><input type="submit" value="Cadastrar novo Usuario"></td></tr>
<?php
}
?>
</table>
</form>
</body>
</html>

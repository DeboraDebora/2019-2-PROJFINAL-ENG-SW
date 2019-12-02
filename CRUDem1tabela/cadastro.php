<?php
if (isset($_POST['BTCadastrar'])) {
 
 //Variaveis de POST, para cadastrar usuario - PRIMEIRA OPERACAO
 //====================================================
 $nome = $_POST['nome'];
 $cpf = $_POST['cpf'];
 $email = $_POST['email']; 
 $telefone = $_POST['telefone'];
 //====================================================
 
 
 //FORMULARIO HTML PARA USUARIO 
 <html>
 <form action="<? $PHP_SELF; ?>" method="POST"> 
 <p> 
<head>
<title> USUARIO</Title>

<head>
	<link href="stylesheet.css"rel="stylesheet" type="text/css">
</head> 

</head>
<h1> CADASTRAR USUARIO</h1>

<div>
	<label for= "nome"> Nome: <label>
	<input type= "text" id= "nome"/>
</div> </br>

<div>


<div>
	<label for= "cpf"> cpf: <label>
	<input type= "text" id= "cpf"/>
</div> </br>

<div>
	<label for= "email"> Email: <label>
	<input type= "text" id= "email"/>
</div> </br>

<div>
	<label for= "telefone"> Telefone: <label>
	<input type= "text" id= "telefone"/>
</div> </br>

<input type="submit" name="BTCadastrar" value="Cadastrar"> 
   <input type="reset" name="BTExcluir" value="Excluir">
        </p>

?>

}

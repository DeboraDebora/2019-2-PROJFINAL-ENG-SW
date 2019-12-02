
<?php
if (isset($_POST['BTEnviar'])) {
 
 //Variaveis de POST, para excluir usuario - quarta operacao
 //====================================================
 $nome = $_POST['nome'];
 
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
<h1> excluir USUARIO</h1>

<div>
	<label for= "nome"> Nome: <label>
	<input type= "text" id= "nome"/>
</div> </br>

<div>



<input type="submit" name="BTEnviar" value="Enviar"> 
   <input type="reset" name="BTVoltar" value="Voltar">
        </p>

?>

}
 
 

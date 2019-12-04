--CADASTRAR USUARIO 

<? php
--cadastrar nome, cpf, email, telefone
--botão cadastrar e sair 

$nome= $POST['nome'];
$cpf= $POST['cpf'];
$email= $POST['email'];
$telefone= $POST['telefone'];

echo "<html><body><h1>"
		.$nome." .$cpf." .$email." .$telefone."
		"</body></html>";
		
$servername= "localhost";
$username= "root";
$password= " ";
$bd= "bdteste";

$conn = mysqli_connect($servername, username, $password,$bd);

if(!$conn){
	die("conexão falhou: ".$conn->connect_error);
}

$sql= "INSERT INTO CLIENTE(Nome, Cpf, Email, Telefone) VALUES ('$nome, '$cpf', '$email', '$telefone')";
if  ( $conn->query($sql) ==TRUE){
	echo "Usuario Cadastrado";
} else {
	echo "Erro no cadastramento: <br>".$conn->error;
}
?> 

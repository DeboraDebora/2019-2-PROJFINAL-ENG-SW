<?php

class Connection{

	private $servername= "localhost";
	private $username = "root";
	private $password= "";
	private $bd= "TrampoFacil";
	private $conn= null;

	function __construct(){
		if($this->conn == null){
			$this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->bd);
		}
		else{
			die("conexão falhou: ". $conn->connect_error);
		}
		return $this->conn; //-retorna o valor da conexao que foi chamada
	}
	
	function getConnection(){
		return $this->conn;
	}
}

<?php

class Connection{

	private $servername= "localhost";
	private $username = "root";
	private $password= " ";
	private $bd= "bdteste";
	private $conn= null;

	function _construct(){}
		if($this->conn == null){
			$this->conn = mysqli_connect($this-> servername, $this.username, $this->password, $this->bd);
		}
		if( !=this->conn){
			die("conexão falhou: ". $conn->connect_error);
		}
		return $this->conn; --retorna o valor da conexao que foi chamada
	}
}

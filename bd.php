<?php
	
	class db {

		//host
		private $host = 'localhost';

		//usuario
		private $usuario = 'root';

		//senha
		private $senha = '';

		//banco de dados
		private $database = 'loteriabd';

		public function conecta_mysql(){

			//criar a conexão
			$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

			//ajustar o charset de comunicação com o bd
			mysqli_set_charset($con, 'utf8');

			//verificar se houve erro
			if(mysqli_connect_errno()){
				echo 'Erro ao tentar conexão com o BD MySQL'.mysqli_connecterror();
			}

			return $con;
		}

	}

?>
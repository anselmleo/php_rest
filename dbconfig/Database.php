<?php
	
	class Database 
	{
		private $host = 'localhost';
		private $dbname = 'php_rest_api';
		private $user = 'root';
		private $password = '';
		private $conn;

		public function connect()
		{
			$this->conn = null;

			try 
			{
				$this->conn = new PDO
				(
					'mysql:host='.$this->host.';dbname='.$this->dbname, 
					$this->user, $this->password
				);
			}

			catch(PDOException $e) 
			{
				echo 'Connection Error: ' . $e->getMessage();
			}

			return $this->conn;
		}
	}


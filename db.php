
<?php 

	class Database {

		private $pdo = null;

		private $user;
		private $database;
		private $password;
		private $host;

		public function __construct($host, $database, $user, $password)
		{
			$this->host = $host;
			$this->database = $database;
			$this->user = $user;
			$this->password = $password;
		}

		private function connect(){
			$this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->database.';charset=utf8', $this->user, $this->password);
		}

		public function getInstance(){
			if($this->pdo == null){
				$this->connect();
				return $this->pdo;
			} else {
				return $this->pdo;
			}
		}



	}

 ?>
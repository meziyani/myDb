
<?php 
	
	require('database.settings.php');

	class Database {

		
		private $credentials;
		private $pdo = null;
		private $database;

		public function __construct($database)
		{
			$this->database = $database;
			$this->credentials = new Settings();
		}

		private function connect(){
			$this->pdo = new PDO('mysql:host='.$this->credentials->host.';dbname='.$this->database.';charset=utf8', $this->credentials->user, $this->credentials->password);
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
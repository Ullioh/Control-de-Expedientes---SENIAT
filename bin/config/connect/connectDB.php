<?php 
	namespace config\connect;
	use config\componentes\configSistema as configSistema;
	use \PDO;

	class connectDB extends configSistema{

		protected $conex;
		private $puerto;
		private $usuario;
		private $password;
		private $local;
		private $nameDB;

		public function __construct(){

			$this->usuario = parent::_USER_();
			$this->password = parent::_PASS_();
			$this->local = parent::_LOCAL_();
			$this->nameDB = parent::_BD_();
			$this->conectarDB();
		}

		protected function conectarDB(){
			try{
				$this->conex = new \PDO("mysql:host={$this->local};dbname={$this->nameDB}", $this->usuario , $this->password);
			}catch (PDOException $e) {
				print "¡Error!: " . $e->getMessage() . "<br/>";
				die();
			}
		}
	
 }

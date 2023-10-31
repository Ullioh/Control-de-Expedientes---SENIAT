<?php 

	namespace config\componentes;

	define("_URL_", "http://localhost/practica/");
	define("_BD_", "bd_expedientes");
	define("_PASS_", "");
	define("_USER_", "root");
	define("_LOCAL_", "localhost");
	define("DIRECTORY_CONTROL", "bin/controlador/");
	define("DIRECTORY_MODEL", "bin/modelo/");
	define("DIRECTORY_VISTA", "vista/");
	define("MODEL", "Modelo.php");
	define("CONTROLADOR", "Controlador.php");
	define("VISTA", "Vista.php");


	class configSistema{
		public function _int(){
			if(!file_exists("bin/controlador/frontControlador.php")){
				return "Error configSistema";
			}
		}

		public function _URL_(){
			return _URL_;
		}
		public function _BD_(){
			return _BD_;
		}
		public function _PASS_(){
			return _PASS_;
		}
		public function _USER_(){
			return _USER_;
		}
		public function _LOCAL_(){
			return _LOCAL_;
		}
		public function _Dir_Control_(){
			return DIRECTORY_CONTROL; 
		}
		public function _Dir_Model_(){
			return DIRECTORY_MODEL; 
		}
		public function _Dir_Vista_(){
			return DIRECTORY_VISTA; 
		}
		public function _MODEL_(){
			return MODEL;
		}
		public function _Control_(){
			return CONTROLADOR;
		}
		public function _VISTA_(){
			return VISTA;
		}
	}

 ?>
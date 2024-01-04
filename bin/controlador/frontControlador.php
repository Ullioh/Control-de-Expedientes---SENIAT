<?php 


	namespace bin\controlador;

	use config\componentes\configSistema as configSistema;

	class frontControlador extends configSistema{
		private $pagina;
		private $directory;
		private $controlador;

		public function __construct($request){
			if (isset($request["pagina"])) {
				$url = parent::Seguridad($request["pagina"], 'decodificar');
				$this->pagina = $url;
				$this->directory = parent::_Dir_Control_();
				$this->controlador = parent::_Control_();
				$this->validarpagina();
			}else{
				$redirectUrl = '?pagina=' . parent::_INICIO_();
				echo '<script>window.location="' . $redirectUrl . '"</script>';
			}
		}

		private function validarpagina(){
			$pattern = preg_match_all("/^[a-zA-Z0-9-@+\/&.=:_#$]{1,700}$/", $this->pagina);
			if ($pattern == 1) {
				$this->_loadPage($this->pagina);
			}else{
				echo $this->pagina;
				require_once "vista/Error404Vista.php";
			}
		}

		private function _loadPage($pagina){
			if(file_exists($this->directory.$pagina.$this->controlador)){
				require_once($this->directory.$pagina.$this->controlador);
			}else{
				if(file_exists($this->directory.$parte.$this->controlador)){
					require_once($this->directory.$parte.$this->controlador);
				}else{
					require_once "vista/error_URL.php";
				}
			}
		}

 	}
?>
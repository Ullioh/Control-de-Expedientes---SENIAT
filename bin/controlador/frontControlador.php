<?php 

	namespace bin\controlador;

	use config\componentes\configSistema as configSistema;

	class frontControlador extends configSistema{
		private $directory;//bin/controlador
		private $pagina;//login
		private $controlador; //controlador.php

		public function __construct($request){
			if (isset($request["pagina"])) {
				$this->pagina = $request["pagina"];
				$this->directory = parent::_Dir_Control_();
				$this->controlador = parent::_Control_();
				$this->validarpagina();
			}else{
				die("<script>window.location='?pagina=Login'</script>");
			}
		}

		private function validarpagina(){
			$pattern = preg_match_all("/^[a-zA-Z0-9-@\/.=:_#$]{1,700}$/", $this->pagina);
			if ($pattern == 1) {
				$this->_loadPage($this->pagina);
			}else{
				die('La url ingresada es inválida');
			}
		}

		private function _loadPage($pagina){
			if(file_exists($this->directory.$pagina.$this->controlador)){
				require_once($this->directory.$pagina.$this->controlador);
			}else{
				$pagina = "Login";
				if(file_exists($this->directory.$pagina.$this->controlador)){
					die("<script>window.location='?pagina=Login'</script>");
			}else{
				die("<script>window.location='?pagina=Error404'</script>");
			}
		}
	}
}
?>